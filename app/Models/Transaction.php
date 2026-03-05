<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'intelligence_lead_id',
        'payment_method',
        'stripe_session_id',
        'stripe_payment_intent',
        'amount',
        'currency',
        'status',
    ];

    /**
     * Relationship: Transaction belongs to a lead
     */
    public function lead()
    {
        return $this->belongsTo(IntelligenceLead::class, 'intelligence_lead_id');
    }
}