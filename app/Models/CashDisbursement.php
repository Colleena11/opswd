<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashDisbursement extends Model
{
    use HasFactory;

    protected $fillable = [
        'cash_claims_payment_id',
        'client_id',
        'amount',
        'confirmation_date',
        'date_received_claimed',
        'date_released_total',
        'amount_claimed',
    ];

    public function cashClaimsPayment()
    {
        return $this->belongsTo(CashClaimsPayment::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}