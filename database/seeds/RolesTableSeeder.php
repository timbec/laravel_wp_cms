<?php

use Illuminate\Database\Seeder;
use App\User; 
use App\Role; 

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('roles')->truncate();

        \App\Role::truncate();
        
                // Attach the roles
                // first user as admin
                $user1 = User::find(1);
                $user1->detachRole('superadministrator');
                $user1->attachRole('superadministrator');
        
                // second user as editor
                $user2 = User::find(2);
                $user2->detachRole('administrator');
                $user2->attachRole('administrator');
        
                // third user as author
                $user3 = User::find(3);
                $user3->detachRole('user');
                $user3->attachRole('user');
    }
}
