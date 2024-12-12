<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudents extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'course_id', 'commission_id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function commission()
    {
        return $this->belongsTo(Commission::class, 'commission_id');
    }
}


