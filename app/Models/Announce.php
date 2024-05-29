<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "skills",
        "benefits",
        "contact",
        "company_id"
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }

}
