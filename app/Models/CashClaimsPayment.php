<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashClaimsPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'approved_claim_id',
        'client_id',
        'date_prepared',
        'confirmed_people_today',
        'amount',
        'total_amount',
        'date_of_payout',
    ];

    public function claim()
    {
        return $this->belongsTo(Claim::class, 'approved_claim_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}