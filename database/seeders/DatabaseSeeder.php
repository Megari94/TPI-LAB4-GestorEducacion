<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProfessorsSeeder::class,
            StudentsSeeder::class,
            SubjectsSeeder::class,
            CoursesSeeder::class,
            CommissionsSeeder::class,
            CourseStudentsSeeder::class,
            
            
        ]);
    }
}
