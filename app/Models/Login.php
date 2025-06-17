<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'login_timestamp',
        'logout_timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}