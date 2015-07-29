<?php

use Illuminate\Database\Seeder; 
use App\User;

class UserSeeder extends Seeder {

    public function run() 
    {

        DB::table('users')->delete();

        User::create([
            
            'name' => 'testuser1',

            'password' => md5(123),

            'email' => 'mymail@163.com'
            
        ]);
    
    }

}
