<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        Course::create(['name' => 'Math 101', 'subject_id' => 1]);
        Course::create(['name' => 'Science 101', 'subject_id' => 2]);
        Course::create(['name' => 'History 101', 'subject_id' => 3]);
    }
}
