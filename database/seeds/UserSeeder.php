<?php

use Illuminate\Database\Seeder; 
use App\Models\Humidity;
use App\User;

class UserSeeder extends Seeder {

    public function run() 
    {

        User::create([
            
            'name' => '123',

            'password' => Crypt::encrypt('123'),

            'email' => 'something@163.com'
            
        ]);
    
    }

}
