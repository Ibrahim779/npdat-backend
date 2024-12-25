<?php

namespace Database\Seeders;

use App\Models\RovaReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RovaReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RovaReview::factory(6)->create();
    }
}
