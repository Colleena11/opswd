<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckClaimsPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'approved_claim_id',
        'client_id',
        'date_prepared',
        'amount',
        'check_number',
        'date_claimed',
        'status',
        'pending_due_to_payee_change',
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