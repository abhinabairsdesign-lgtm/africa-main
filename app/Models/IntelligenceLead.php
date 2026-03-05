<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntelligenceLead extends Model
{
    protected $fillable = [
    'name',
    'email',
    'country',
    'industry',
    'selected_plan',
];
 /**
     * Lead has one transaction
     */
    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'intelligence_lead_id');
    }

}
