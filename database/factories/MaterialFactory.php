<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Material;


class MaterialFactory extends Factory
{
    protected $model = Material::class; 

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->catchPhrase(),
            'description' => $this->faker->sentences(2, true),
            'file' => "google bucket",
           
            'user_id' => 1,
            
        ];
    }
}