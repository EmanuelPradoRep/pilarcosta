<?php

namespace Database\Seeders;
use App\Models\Actividades;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Actividades::factory()->count(10)->create();
    }
}
