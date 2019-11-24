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
        $user =  App\User::create([
        	'name' => 'admin',
        	'email' => 'admin@pc.com',
        	'password' => bcrypt('password'),
            'admin' => 1
        ]);


        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'The admin is the pc is the user and has the profile for the admin using the pc',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
