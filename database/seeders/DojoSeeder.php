<?php

namespace Database\Seeders;

use App\Models\Dojo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DojoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Dojo::factory()->count(20)->create();
    }
}
