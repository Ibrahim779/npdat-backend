<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WeOffer>
 */
class WeOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> ['en'=>$this->faker->name,'ar'=>$this->faker->name],
            'description'=> ['en'=>$this->faker->text,'ar'=>$this->faker->text],
            'title'=> ['en'=>$this->faker->title,'ar'=>$this->faker->title],
        ];
    }
}
