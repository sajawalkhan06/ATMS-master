<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $faker = Faker\Factory::create();    	
    	for($i = 0; $i<50; $i++){
    		User::create([
    			'name'     		 => $faker->name,
    			'email'    		 => $faker->email,
    			'password' 		 => $faker->password,
    			'api_token'		 => str_random(60),
    			'remember_token' => str_random(60)
    		]);
    	}
    }
}
