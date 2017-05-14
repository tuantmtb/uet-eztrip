<?php

use App\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 9; $i++) {
            Tour::create([
                'name' => 'Hanoi Foody Tour - Half day',
                'description' => 'Hanoi foody tour is the best choice to discover the real ancient Hanoi Old Quarter while tasting amazing authentic street food. Walking through the narrow, chaotic streets of the Old Quarter, you can stop along the way to try some of many local delicacies on offer.',
                'place' => 'Hanoi',
                'city' => 'Hanoi',
                'price' => '22',
                'time_duration' => 3,
                'url_cover' => 'http://localhost:8000/img2/cover/' . $i . '.jpg',
                'url_gird' => 'http://localhost:8000/img2/cover/' . 8 - $i . '.jpg',
                'tourguide_id' => 4
            ]);
        }

    }
}
