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

        $role_admin = Role::where('slug', 'super')->first();
        $super->roles()->attach($role_admin);
    }
}
