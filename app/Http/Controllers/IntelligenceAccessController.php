<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\IntelligenceLead;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Transaction;

class IntelligenceAccessController extends Controller
{
   public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:intelligence_leads,email',
        'country'  => 'required|string|max:255',
        'industry' => 'required|string|max:255',
        'plan'     => 'required|in:free,card,paypal',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors'  => $validator->errors()
        ], 422);
    }

    $lead = IntelligenceLead::create([
        'name'          => $request->name,
        'email'         => $request->email,
        'country'       => $request->country,
        'industry'      => $request->industry,
        'selected_plan' => $request->plan,
    ]);

    // FREE PLAN
    if ($request->plan === 'free') {
        return response()->json([
            'success' => true,
            'redirect' => url('/free-dashboard')
        ]);
    }

    // STRIPE CARD PAYMENT
    if ($request->plan === 'card') {

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'mode' => 'subscription',
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Intelligence Pro Subscription',
                    ],
                    'unit_amount' => 500, // $5
                    'recurring' => [
                        'interval' => 'month'
                    ]
                ],
                'quantity' => 1,
            ]],
            'success_url' => url('/payment-success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url' => url('/payment-cancel'),
            'customer_email' => $lead->email,
        ]);

        // Save transaction
        Transaction::create([
            'intelligence_lead_id' => $lead->id,
            'payment_method' => 'stripe',
            'stripe_session_id' => $session->id,
            'amount' => 5.00,
            'currency' => 'usd',
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'redirect' => $session->url
        ]);
    }

    return response()->json(['success' => false]);
}
}