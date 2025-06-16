<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashDisbursement extends Model
{
    use HasFactory;

    protected $fillable = [
        'approved_claim_id',
        'amount',
        'disbursement_date',
        // add other relevant fields
    ];
}