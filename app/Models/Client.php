<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
    'first_name',
    'middle_name',
    'last_name',
    ];

    // Relationships
    public function payees()
    {
        return $this->hasMany(Payee::class);
    }

    public function clientAssistances()
    {
        return $this->hasMany(ClientAssistance::class);
    }

    public function claims()
    {
        return $this->hasMany(Claim::class);
    }
}