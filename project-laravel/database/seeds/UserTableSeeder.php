<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use App\User;
use App\Permission;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();

        $user->name = 'Admin';
        $user->email = 'admin@eplaner.le-styx.net';
        $user->password = Hash::make('admin123');
        $user->save();

        $adminRole = Role::whereName('admin')->first();

        $user->attachRole($adminRole);

        $user->save();

    }
}
