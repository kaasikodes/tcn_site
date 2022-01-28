<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lecture;

class LectureFactory extends Factory
{
    protected $model = Lecture::class; 
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
            'summary' => $this->faker->sentences(2, true),
            'content' => $this->faker->paragraph(3, true),
            'user_id' => 1,
        ];
    }
}