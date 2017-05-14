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
            $num = 8 - $i;
            Tour::create([
                'name' => 'Hanoi Foody Tour - Half day',
                'description' => 'Hanoi foody tour is the best choice to discover the real ancient Hanoi Old Quarter while tasting amazing authentic street food. Walking through the narrow, chaotic streets of the Old Quarter, you can stop along the way to try some of many local delicacies on offer.',
                'place' => 'Hanoi',
                'city' => 'Hanoi',
                'price' => '22',
                'time_duration' => 3,
                'url_cover' => Config::get('app.url') . '/img2/cover/' . $i . '.jpg',
                'url_gird' => Config::get('app.url') . '/img2/cover/' . $num . '.jpg',
                'tourguide_id' => 4
            ]);
        }

    }
}
