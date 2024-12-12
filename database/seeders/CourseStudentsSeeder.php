<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseStudents;

class CourseStudentsSeeder extends Seeder
{
    public function run()
    {
        CourseStudents::create(['student_id' => 1, 'course_id' => 1, 'commission_id' => 1]);
        CourseStudents::create(['student_id' => 2, 'course_id' => 2, 'commission_id' => 2]);
        CourseStudents::create(['student_id' => 3, 'course_id' => 3, 'commission_id' => 3]);
    }
}
