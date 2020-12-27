<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function materials()
    {
        return $this->hasMany(CourseMaterial::class);
    }


    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'registration_deadline'
    ];
}
