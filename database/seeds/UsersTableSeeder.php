<?php

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
       factory(App\User::class, 10)->create()->each(function($user){ 
           factory('App\Thread',10)->create(['user_id' => $user->id]); 
        });
    }
}
