<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lecture;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lecture::create([
        //     'title' => 'Dissolved Gas Analysis',
        // 'summary' => 'This is test is primarily performed on transformer oil, to verify its purity, and ensure there has been no arcing.',
        // 'content' => 'There alot of ways to carry out this test, but in our case we would be making use of the razor 2 machine to print out results after test',
        // 'user_id' => 1,
        // ]);
        Lecture::factory()->count(8)->create();
    }
}