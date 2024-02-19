<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;


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
            'author'=>$this->faker->sentence(),
            'title'=>$this->faker->sentence(), // Cambiar de $this->faker->title a $this->faker->sentence()
            'id_themes' => 1,  
            'id_extraresources' => rand(1, 2),
            'id_resourcestype' => rand(1, 2),
        ];
    }
    
}