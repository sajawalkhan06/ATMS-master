<?php

use Illuminate\Database\Seeder;
use App\Device;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<5; $i++){
        	Device::create([
        		'user_id' 	  => $faker->numberBetween($min=1,$max=5),
        		'device_key'  => str_random(5),
        		'device_name' => $faker->name,
        		'device_type' => null
        	]);
        }
    }
}
