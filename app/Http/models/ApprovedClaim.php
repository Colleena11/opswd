<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedClaim extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'assistance_type_id',
        'amount',
        // add other relevant fields
    ];
}