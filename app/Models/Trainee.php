<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'last_name',
        'first_name',
        'password',
        'address',
        'phone_number',
        'domain'
    ];
}
