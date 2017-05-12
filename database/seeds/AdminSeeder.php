<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::findByName('admin');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10),
        ])->attachRole($admin);

        User::create([
            'name' => 'Trần Minh Tuấn',
            'email' => 'tuantmtb@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10),
        ])->attachRole($admin);

        User::create([
            'name' => 'Nguyễn Văn Nhật',
            'email' => 'nguyenvannhat152@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10),
        ])->attachRole($admin);

    }
}
