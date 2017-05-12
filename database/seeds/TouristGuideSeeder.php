<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class TouristGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tourist = Role::findByName('tourist');

        User::create([
            'name' => 'Khách du lịch',
            'email' => 'tourist@gmail.com',
            'password' => bcrypt('tourist'),
            'remember_token' => str_random(10),
        ])->attachRole($tourist);
    }
}
