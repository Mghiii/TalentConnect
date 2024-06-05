<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable =[
        'offre_date',
        'CV',
        'motivation_lettre',
        'status',
        'trainee_id',
        'announce_id',
    ];
    public function announce() {
        return $this->belongsTo(Announce::class);
    }
    public function trainee() {
        return $this->belongsTo(Trainee::class);
    }
    public function internships(){
        return $this->hasMany(Internship::class , "offre_id");
    }
}
