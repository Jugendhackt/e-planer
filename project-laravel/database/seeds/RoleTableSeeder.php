<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      $adminRole = Role::create([
        'name' => 'admin',
        'display_name' => 'Administrator',
        'description' => '',
      ]);

      $teacherRole = Role::create([
        'name' => 'teacher',
        'display_name' => 'Teacher',
        'description' => '',
      ]);

      $studentRole = Role::create([
        'name' => 'student',
        'display_name' => 'Student',
        'description' => ''
      ])
    }
}
