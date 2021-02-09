<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'student_id',
        'price',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function course()
    {
        return $this->hasOne(Course::class);
    }
}
