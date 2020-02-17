<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table("users")->insert([
        [
        	'name' => 'john',
        	'email' => 'john@gmail.com',
        	'password' => bcrypt('123456789'),
        	'isAdmin' => '1',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
        	'name' => 'james',
        	'email' => 'james@gmail.com',
        	'password' => bcrypt('123456789'),
        	'isAdmin' => '0',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
    	]);
    }
}
