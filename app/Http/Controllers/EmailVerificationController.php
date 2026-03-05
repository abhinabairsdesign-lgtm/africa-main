<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailOtp;
use App\Models\IntelligenceLead;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class EmailVerificationController extends Controller
{
    /* ========================================
       SEND OTP
    ======================================== */
   public function sendOtp(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid email address.'
        ], 422);
    }

    $email = $request->email;

    /* ==========================================
       CHECK IF ALREADY SUBSCRIBED
    ========================================== */
    $existingSubscriber = IntelligenceLead::where('email', $email)
    ->whereHas('transaction', function ($query) {
        $query->where('status', 'paid');
    })
    ->exists();

    dd($existingSubscriber);

    if ($existingSubscriber) {
        return response()->json([
            'success' => false,
            'already_subscribed' => true,
            'message' => 'You are already subscribed.'
        ], 409);
    }

    /* ==========================================
       GENERATE OTP
    ========================================== */
    $otp = rand(100000, 999999);

    EmailOtp::updateOrCreate(
        ['email' => $email],
        [
            'otp' => $otp,
            'expires_at' => Carbon::now()->addMinutes(10),
            'verified' => false
        ]
    );

    Mail::raw(
        "Your Intelligence Access verification code is: $otp\n\nThis code will expire in 10 minutes.",
        function ($message) use ($email) {
            $message->to($email)
                    ->subject('Your Verification Code - Intelligence Access');
        }
    );

    return response()->json([
        'success' => true,
        'message' => 'Verification code sent successfully.'
    ]);
}

    /* ========================================
       VERIFY OTP
    ======================================== */
    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'otp'   => 'required|digits:6'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid verification data.'
            ], 422);
        }

        $record = EmailOtp::where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('verified', false)
            ->first();

        if (!$record) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid verification code.'
            ], 400);
        }

        if (Carbon::now()->greaterThan($record->expires_at)) {
            return response()->json([
                'success' => false,
                'message' => 'Verification code expired.'
            ], 400);
        }

        $record->update([
            'verified' => true
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Email verified successfully.'
        ]);
    }
}