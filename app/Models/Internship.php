<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    protected $fillable =[
        'start_date',
        'end_date',
        'certificate',
        'comment',
        'offre_id',
        'company_id',
        'trainee_id'
    ];
}
