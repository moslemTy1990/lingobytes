<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 *
 * @package App\Models
 */
class Course extends Model
{
    use HasFactory;


    public function materials()
    {
        return $this->hasMany(CourseMaterial::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'registration_deadline',
        'description',
        'brief',
        'course_logo',
        'level',
        'price',
    ];
}
