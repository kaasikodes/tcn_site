<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Video;
class VideoFactory extends Factory
{
    protected $model = Video::class; 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->catchPhrase(),
            'description' => $this->faker->sentences(2, true),
           
            'user_id' => 1,
            'url' => "/wexdl9o",
        ];
    }
}