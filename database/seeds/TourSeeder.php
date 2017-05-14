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
        Tour::create([
            'name' => 'Hanoi Foody Tour - Half day',
            'description' => 'Hanoi foody tour is the best choice to discover the real ancient Hanoi Old Quarter while tasting amazing authentic street food. Walking through the narrow, chaotic streets of the Old Quarter, you can stop along the way to try some of many local delicacies on offer.',
            'place' => 'Hanoi',
            'city' => 'Hanoi',
            'price' => '22',
            'time_duration' => 3,
            'url_cover' => 'https://triip.imgix.net/triips/images/1232/1269/3e54b1da204511e3a792f20cfe3c2acb.jpg?crop=faces&fit=crop',
            'url_gird' => 'https://triip.imgix.net/triips/images/21386/23160/9f163f8e316711e7bcce4eba7c8cbe05_1920x1080.jpg?dpr=2&q=50&w=490',
            'tourguide_id' => 4
        ]);

    }
}
