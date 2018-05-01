<?php

use App\User;
use App\Right;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user -> name = 'Brandon Hum';
        $user -> email = 'brandon.hum88@gmail.com';
        $user -> password = '$2y$10$fnv3KDZWkJv3odlydNCALuRRmnTlxtUXjiywGkAdVuIoK1Kaf5C0y';
        $user -> save();

        $admin = new Right;
        $admin -> name = 'admin';
        $right -> save();

        $basic = new Right;
        $basic -> name = 'basic';
        $right -> save();

        $user -> attach($right);
    }
}
