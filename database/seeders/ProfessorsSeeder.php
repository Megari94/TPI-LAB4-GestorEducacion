<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorsSeeder extends Seeder
{
    public function run()
    {
        Professor::create(['name' => 'Dr. John Smith']);
        Professor::create(['name' => 'Dr. Jane Doe']);
        Professor::create(['name' => 'Dr. Alice Johnson']);
    }
}
