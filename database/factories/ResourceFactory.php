<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author'=>$this->faker->author,
            'title'=>$this->faker->title,
            'id_themes' => ResourceFactory::new()->create()->id,
            'id_extra_resources' => ResourceFactory::new()->create()->id,
            'id_resources_type' => ResourceFactory::new()->create()->id,
             
        ];
    }
}