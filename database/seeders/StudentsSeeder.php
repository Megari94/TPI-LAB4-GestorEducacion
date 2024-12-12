<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        Student::create(['name' => 'Emily Brown', 'email' => 'emily@example.com']);
        Student::create(['name' => 'Michael Green', 'email' => 'michael@example.com']);
        Student::create(['name' => 'Sophia White', 'email' => 'sophia@example.com']);
    }
}
