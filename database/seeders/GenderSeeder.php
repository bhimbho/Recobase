<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Gender::create(['title' => 'Male']);
       Gender::create(['title' => 'Female']);
       Gender::create(['title' => 'Agender']);
    }
}
