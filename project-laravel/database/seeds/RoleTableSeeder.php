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

        $adminPermissions = [
            /* ----- Role ----- */
            Permission::whereName('role-list')->first(),
            Permission::whereName('role-create')->first(),
            Permission::whereName('role-edit')->first(),
            Permission::whereName('role-delete')->first(),
            /* ----- Admin ----- */
            Permission::whereName('create-admin')->first(),
            Permission::whereName('read-admin')->first(),
            Permission::whereName('update-admin')->first(),
            Permission::whereName('delete-admin')->first(),
            /* ----- User ----- */
            Permission::whereName('create-user')->first(),
            Permission::whereName('read-user')->first(),
            Permission::whereName('update-user')->first(),
            Permission::whereName('delete-user')->first(),
            /* ----- Homework ----- */
            Permission::whereName('create-homework')->first(),
            Permission::whereName('read-homework')->first(),
            Permission::whereName('update-homework')->first(),
            Permission::whereName('delete-homework')->first(),
            /* ----- Course ----- */
            Permission::whereName('create-course')->first(),
            Permission::whereName('read-course')->first(),
            Permission::whereName('update-course')->first(),
            Permission::whereName('delete-course')->first(),
            /* ----- Lesson ----- */
            Permission::whereName('create-lesson')->first(),
            Permission::whereName('read-lesson')->first(),
            Permission::whereName('update-lesson')->first(),
            Permission::whereName('delete-lesson')->first(),
            /* ----- Blackboard-Entry ----- */
            Permission::whereName('create-blackboard-entry')->first(),
            Permission::whereName('read-blackboard-entry')->first(),
            Permission::whereName('update-blackboard-entry')->first(),
            Permission::whereName('delete-blackboard-entry')->first(),
            /* ----- Substitution Schedule ----- */
            Permission::whereName('create-substitution')->first(),
            Permission::whereName('read-substitution')->first(),
            Permission::whereName('update-substitution')->first(),
            Permission::whereName('delete-substitution')->first(),
            /* ----- Project ----- */
            Permission::whereName('create-project')->first(),
            Permission::whereName('read-project')->first(),
            Permission::whereName('update-project')->first(),
            Permission::whereName('delete-project')->first(),

        ];

        $adminRole->attachPermissions($adminPermissions);

        $adminRole->save();

        $teacherRole = Role::create([
            'name' => 'teacher',
            'display_name' => 'Teacher',
            'description' => '',
        ]);

        $teacherPermissions = [
            /* ----- Homework ----- */
            Permission::whereName('create-homework')->first(),
            Permission::whereName('read-homework')->first(),
            Permission::whereName('update-homework')->first(),
            Permission::whereName('delete-homework')->first(),
            /* ----- Course ----- */
            Permission::whereName('read-course')->first(),
            /* ----- Lesson ----- */
            Permission::whereName('read-lesson')->first(),
            /* ----- Blackboard-Entry ----- */
            Permission::whereName('create-blackboard-entry')->first(),
            Permission::whereName('read-blackboard-entry')->first(),
            Permission::whereName('update-blackboard-entry')->first(),
            Permission::whereName('delete-blackboard-entry')->first(),
            /* ----- Substitution Schedule ----- */
            Permission::whereName('read-substitution')->first(),
            /* ----- Project ----- */
            Permission::whereName('read-project')->first(),
        ];

        $teacherRole->attachPermissions($teacherPermissions);

        $teacherRole->save();

        $studentRole = Role::create([
            'name' => 'student',
            'display_name' => 'Student',
            'description' => ''
        ]);

        $studentPermissions = [
            /* ----- Homework ----- */
            Permission::whereName('create-homework')->first(),
            Permission::whereName('read-homework')->first(),
            Permission::whereName('update-homework')->first(),
            Permission::whereName('delete-homework')->first(),
            /* ----- Course ----- */
            Permission::whereName('read-course')->first(),
            /* ----- Lesson ----- */
            Permission::whereName('read-lesson')->first(),
            /* ----- Blackboard-Entry ----- */
            Permission::whereName('read-blackboard-entry')->first(),
            /* ----- Substitution Schedule ----- */
            Permission::whereName('read-substitution')->first(),
            /* ----- Project ----- */
            Permission::whereName('create-project')->first(),
            Permission::whereName('read-project')->first(),
            Permission::whereName('update-project')->first(),
            Permission::whereName('delete-project')->first(),
        ];

        $studentRole->attachPermissions($studentPermissions);

        $studentRole->save();

    }
}
