<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'userable_id', 'userable_type'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function booted()
    {
        static::creating(function ($user) {
            if ($user->role === 'company') {
                $user->userable_type = Company::class;
            } elseif ($user->role === 'trainee') {
                $user->userable_type = Trainee::class;
            }
        });
    }
}