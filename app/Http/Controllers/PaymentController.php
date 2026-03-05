<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\IntelligenceLead;

class PaymentController extends Controller
{
    public function success(Request $request)
    {
        $sessionId = $request->query('session_id');

        if (!$sessionId) {
            return redirect('/');
        }

        $transaction = Transaction::where('stripe_session_id', $sessionId)->first();

        if (!$transaction) {
            return redirect('/');
        }

        // Mark transaction as paid
        $transaction->status = 'paid';
        $transaction->save();

        // Upgrade user access
        $lead = IntelligenceLead::find($transaction->intelligence_lead_id);
        if ($lead) {
            $lead->converted = true;
            $lead->save();
        }

        return view('Home.home');
    }

    public function cancel()
    {
        return view('Home.home');
    }
}