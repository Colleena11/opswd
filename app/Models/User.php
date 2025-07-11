<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    protected $fillable = ['employee_id', 'username', 'email', 'password', 'created_date'];
    protected $hidden = ['password'];
}