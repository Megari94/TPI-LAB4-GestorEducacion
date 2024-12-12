<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commission;

class CommissionsSeeder extends Seeder
{
    public function run()
    {
        Commission::create(['aula' => 'A1', 'horario' => '08:00-10:00', 'course_id' => 1]);
        Commission::create(['aula' => 'B1', 'horario' => '10:00-12:00', 'course_id' => 2]);
        Commission::create(['aula' => 'C1', 'horario' => '14:00-16:00', 'course_id' => 3]);
    }
}
