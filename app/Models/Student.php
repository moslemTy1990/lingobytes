<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Jetstream\HasProfilePhoto;


class Student extends Authenticatable {

    use HasProfilePhoto;
    use Notifiable;
    use HasFactory;

    protected $fillable = [
        'name',
        'last_login',
        'status',
        'mobile',
        'email',
        'password',
        'gender',
        'age',
        'status',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
