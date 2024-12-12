<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_students')
                    ->withPivot('commission_id')
                    ->withTimestamps();
    }

    public function commissions()
    {
        return $this->belongsToMany(Commission::class, 'course_students')
                    ->withTimestamps();
    }
}
