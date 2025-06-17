<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payee extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'first_name',
        'middle_name',
        'last_name',
        'relationship',
        'proof_of_relationship',
        'update_to_new_payee',
        'previous_payee_name',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}