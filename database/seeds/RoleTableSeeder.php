<?php


use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // permission
        $this->createPermission();

        // role and set permission
        $this->createRole();

    }

    /**
     * create permission
     */
    public function createPermission()
    {
        Permission::create([
            'name' => 'manage'
        ]);

        Permission::create([
            'name' => 'create_tour'
        ]);

        Permission::create([
            'name' => 'order_tour'
        ]);
    }

    public function createRole()
    {
        $manage = Permission::findByName('manage');
        $create_tour = Permission::findByName('create_tour');
        $order_tour = Permission::findByName('order_tour');

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Quản trị'
        ]);

        $admin->attachPermission($manage);
        $admin->attachPermission($create_tour);

        Role::create([
            'name' => 'tourguide',
            'display_name' => 'Hướng dẫn viên du lịch'
        ])->attachPermission($create_tour);

        Role::create([
            'name' => 'tourist',
            'display_name' => 'Khách du lịch'
        ])->attachPermission($order_tour);
    }
}
