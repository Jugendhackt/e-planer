<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(\Database\Seeds\PermissionTableSeeder::class);
      $this->call(\Database\Seeds\RoleTableSeeder::class);
      $this->call(\Database\Seeds\UserTableSeeder::class);
    }
}
