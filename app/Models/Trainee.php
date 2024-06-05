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
        'trainee_image',
        'domain'
    ];
    public function offres(){
        return $this->hasMany(Offre::class , "trainee_id");
    }
    public function internships(){
        return $this->hasMany(Internship::class , "trainee_id");
    }
}
