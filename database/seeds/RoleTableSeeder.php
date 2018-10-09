<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * The Default Users
         */

        $role_super = new Role();
        $role_super->name = 'Super';
        $role_super->slug = 'super';
        $role_super->description = 'The Super User with all privilages';
        $role_super->save();

        $role_admin = new Role();
        $role_admin->name = 'Administrator';
        $role_admin->slug = 'administrator';
        $role_admin->description = 'An Administrator.';
        $role_admin->save();

        $role_moderator = new Role();
        $role_moderator->name = 'Moderator';
        $role_moderator->slug = 'moderator';
        $role_moderator->description = 'A Moderator';
        $role_moderator->save();
        
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->slug = 'user';
        $role_user->description = 'A normal User.';
        $role_user->save();

        /**
         * More Specific Users
         */

        /**
         * Shelter USers
        */

        $role_shelter_administrator = new Role();
        $role_shelter_administrator->name = 'Shelter Administrator';
        $role_shelter_administrator->slug = 'shelter_administrator';
        $role_shelter_administrator->description = 'The Shelter Administrators.';
        $role_shelter_administrator->save();

        $role_shelter_moderator = new Role();
        $role_shelter_moderator->name = 'Shelter Moderator';
        $role_shelter_moderator->slug = 'shelter_moderator';
        $role_shelter_moderator->description = 'The Shelter Moderators.';
        $role_shelter_moderator->save();

        $role_shelter_employee = new Role();
        $role_shelter_employee->name = 'Shelter Employee';
        $role_shelter_employee->slug = 'shelter_employee';
        $role_shelter_employee->description = 'The Shelter Employees.';
        $role_shelter_employee->save();

        /**
         * Petsitter USers
        */

        $role_petsitter_administrator = new Role();
        $role_petsitter_administrator->name = 'Petsitter Administrator';
        $role_petsitter_administrator->slug = 'petsitter_administrator';
        $role_petsitter_administrator->description = 'The Petsitter Administrators.';
        $role_petsitter_administrator->save();

        $role_petsitter_moderator = new Role();
        $role_petsitter_moderator->name = 'Petsitter Moderator';
        $role_petsitter_moderator->slug = 'petsitter_moderator';
        $role_petsitter_moderator->description = 'The petsitter Moderators.';
        $role_petsitter_moderator->save();
    }
}
