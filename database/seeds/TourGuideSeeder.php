<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class TourGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tourguide = Role::findByName('tourguide');

        User::create([
            'name' => 'Hướng dẫn viên',
            'email' => 'tourguide@gmail.com',
            'password' => bcrypt('tourguide'),
            'description' => "I'm from Hanoi eBuddies - a organization which is willing to accompany tourists to attractive sites around Hanoi",
            'img_avatar' => 'img2/cover/4.jpg',
            'remember_token' => str_random(10),
        ])->attachRole($tourguide);

        
    }
}
