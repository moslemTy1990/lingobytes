<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'type',
        'user_id'
    ];
}