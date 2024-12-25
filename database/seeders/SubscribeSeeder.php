<?php

namespace Database\Seeders;

use App\Models\Subscribe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Subscribe::factory(10)->create();
    }
}
