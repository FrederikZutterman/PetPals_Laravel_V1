<?php

use Illuminate\Database\Seeder;

use App\People;
use App\Role;
use App\USer;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Super User
         */

        $people = new People();
        $people->created_at = date("Y-m-d H:i:s");
        $people->updated_at = date("Y-m-d H:i:s");
        $people->save();
        
        $super = new User();
        $super->username = 'super';
        $super->email = 'super@petpals.be';
        $super->people_id = $people->id;
        $super->password = bcrypt('super');
        $super->created_at = date("Y-m-d H:i:s");
        $super->updated_at = date("Y-m-d H:i:s");
        $super->save();

        $role_super = Role::where('slug', 'super')->first();
        $super->roles()->attach($role_super);

        /**
         * Admin User
         */

        $people = new people();
        $people->created_at = date("Y-m-d H:i:s");
        $people->updated_at = date("Y-m-d H:i:s");
        $people->save();

        $admin = new User();
        $admin = new User();
        $admin->username = 'admin';
        $admin->email = 'admin@petpals.be';
        $admin->people_id = $people->id;
        $admin->password = bcrypt('admin');
        $admin->created_at = date("Y-m-d H:i:s");
        $admin->updated_at = date("Y-m-d H:i:s");
        $admin->save();

        $role_admin = Role::where('slug', 'administrator')->first();
        $admin->roles()->attach($role_admin);

        /**
         * User
         */

        $people = new people();
        $people->created_at = date("Y-m-d H:i:s");
        $people->updated_at = date("Y-m-d H:i:s");
        $people->save();

        $user = new User();
        $user->username = 'user';
        $user->email = 'user@petpals.be';
        $user->people_id = $people->id;
        $user->password = bcrypt('user');
        $user->created_at = date("Y-m-d H:i:s");
        $user->updated_at = date("Y-m-d H:i:s");
        $user->save();

        $role_user = Role::where('slug', 'user')->first();
        $user->roles()->attach($role_user);
    }
}
