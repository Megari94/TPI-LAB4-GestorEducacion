<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsSeeder extends Seeder
{
    public function run()
    {
        Subject::create(['name' => 'Mathematics']);
        Subject::create(['name' => 'Science']);
        Subject::create(['name' => 'History']);
    }
}
