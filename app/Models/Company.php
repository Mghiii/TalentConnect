<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'contact_name',
        'email',
        'password',
        'phone_number',
        'username',
        'address',
        'domain',
    ];
    public function announces(){
        return $this->hasMany(Announce::class , "company_id");
    }
}
