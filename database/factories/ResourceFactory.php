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
          /*   'author'=>$this->faker->sentence(),
            'title'=>$this->faker->title,
            /* 'id_themes' => ResourceFactory::new()->create()->id,
            'id_extra_resources' => ResourceFactory::new()->create()->id,
            'id_resources_type' => ResourceFactory::new()->create()->id, */ 
           /*  'id_themes' => $this->faker->unique(true)->numberBetween(1, 10), 
            'id_extra_resources' => $this->faker->unique(true)->numberBetween(1, 10),  
            'id_resources_type' => $this->faker->unique(true)->numberBetween(1, 10),
              */
              'author'=>$this->faker->sentence(),
            'title'=>$this->faker->title,
            'id_themes' => 1,  
            'id_extra_resources' => rand(1, 2),
            'id_resources_type' => rand(1, 2),
        ];
    }
}