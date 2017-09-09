<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $permissions = [
            /* --------------- Role ---------------- */
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'See only Listing Of Role'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            /* --------------- Admin ---------------- */
            [
                'name'          => 'create-admin',
                'display_name'  => 'Admin Create',
                'description'   => 'Creating Admin Properties'
            ],
            [
                'name'          => 'read-admin',
                'display_name'  => 'Admin Read',
                'description'   => 'Reading Admin Properties'
            ],
            [
                'name'          => 'update-admin',
                'display_name'  => 'Admin Update',
                'description'   => 'Updating Admin Properties'
            ],
            [
                'name'          => 'delete-admin',
                'display_name'  => 'Admin Delete',
                'description'   => 'Deleting Admin Properties'
            ],
            /* --------------- User ---------------- */
            [
                'name'          => 'create-user',
                'display_name'  => 'User Create',
                'description'   => 'Creating User Properties'
            ],
            [
                'name'          => 'read-user',
                'display_name'  => 'User Read',
                'description'   => 'Reading User Properties'
            ],
            [
                'name'          => 'update-user',
                'display_name'  => 'User Update',
                'description'   => 'Updating User Properties'
            ],
            [
                'name'          => 'delete-user',
                'display_name'  => 'User Delete',
                'description'   => 'Deleting User Properties'
            ],
            /* --------------- Homework ---------------- */
            [
                'name'          => 'create-homework',
                'display_name'  => 'User Create Homework',
                'description'   => 'Creating User Homework'
            ],
            [
                'name'          => 'read-homework',
                'display_name'  => 'User Read Homework',
                'description'   => 'Reading User Homework'
            ],
            [
                'name'          => 'update-homework',
                'display_name'  => 'User Update Homework',
                'description'   => 'Updating User Homework'
            ],
            [
                'name'          => 'delete-homework',
                'display_name'  => 'User Delete Homework',
                'description'   => 'Deleting User Homework'
            ],
            /* --------------- Course ---------------- */
            [
                'name'          => 'create-course',
                'display_name'  => 'User Create Course',
                'description'   => 'Creating User Course'
            ],
            [
                'name'          => 'read-course',
                'display_name'  => 'User Read Course',
                'description'   => 'Reading User Course'
            ],
            [
                'name'          => 'update-course',
                'display_name'  => 'User Update Course',
                'description'   => 'Updating User Course'
            ],
            [
                'name'          => 'delete-course',
                'display_name'  => 'User Delete Course',
                'description'   => 'Deleting User Course'
            ],
            /* --------------- Lessons ---------------- */
            [
                'name'          => 'create-lesson',
                'display_name'  => 'User Create Lesson',
                'description'   => 'Creating User Lesson'
            ],
            [
                'name'          => 'read-lesson',
                'display_name'  => 'User Read Lesson',
                'description'   => 'Reading User Lesson'
            ],
            [
                'name'          => 'update-lesson',
                'display_name'  => 'User Update Lesson',
                'description'   => 'Updating User Lesson'
            ],
            [
                'name'          => 'delete-lesson',
                'display_name'  => 'User Delete Lesson',
                'description'   => 'Deleting User Lesson'
            ],
            /* --------------- Blackboard-Entry ---------------- */
            [
                'name'          => 'create-blackboard-entry',
                'display_name'  => 'User Create Blackboard Entry',
                'description'   => 'Creating User Blackboard Entry'
            ],
            [
                'name'          => 'read-blackboard-entry',
                'display_name'  => 'User Read Blackboard Entry',
                'description'   => 'Reading User Blackboard Entry'
            ],
            [
                'name'          => 'update-blackboard-entry',
                'display_name'  => 'User Update Blackboard Entry',
                'description'   => 'Updating User Blackboard Entry'
            ],
            [
                'name'          => 'delete-blackboard-entry',
                'display_name'  => 'User Delete Blackboard Entry',
                'description'   => 'Deleting User Blackboard Entry'
            ],
            /* --------------- Substitution Schedule ---------------- */
            [
                'name'          => 'create-substitution',
                'display_name'  => 'User Create Substitution',
                'description'   => 'Creating User Substitution'
            ],
            [
                'name'          => 'read-substitution',
                'display_name'  => 'User Read Substitution',
                'description'   => 'Reading User Substitution'
            ],
            [
                'name'          => 'update-substitution',
                'display_name'  => 'User Update Substitution',
                'description'   => 'Updating User Substitution'
            ],
            [
                'name'          => 'delete-substitution',
                'display_name'  => 'User Delete Substitution',
                'description'   => 'Deleting User Substitution'
            ],
            /* --------------- Project ---------------- */
            [
                'name'          => 'create-project',
                'display_name'  => 'User Create Project',
                'description'   => 'Creating User Project'
            ],
            [
                'name'          => 'read-project',
                'display_name'  => 'User Read Project',
                'description'   => 'Reading User Project'
            ],
            [
                'name'          => 'update-project',
                'display_name'  => 'User Update Project',
                'description'   => 'Updating User Project'
            ],
            [
                'name'          => 'delete-project',
                'display_name'  => 'User Delete Project',
                'description'   => 'Deleting User Project'
            ],
        ];

        foreach ($permissions as $key => $value) {

            Permission::create($value);

        }

    }
}
