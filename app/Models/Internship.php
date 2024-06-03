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
    public function trainee() {
        return $this->belongsTo(Trainee::class);
    }
    public function company() {
        return $this->belongsTo(Company::class);
    }
    public function offre() {
        return $this->belongsTo(Offre::class);
    }
}
