<?php

namespace Database\Seeders;

use App\Models\RovaProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RovaProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RovaProduct::factory(4)->create();
    }
}
