<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class StudentTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table("students")->insert([
        [
        	'name' => 'raj	',
        	'email' => 'raj@gmail.com',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
        	'name' => 'komal',
        	'email' => 'komal@gmail.com',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
        	'name' => 'pooja',
        	'email' => 'pooja@gmail.com',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
        	'name' => 'vivek',
        	'email' => 'vivek@gmail.com',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
        	'name' => 'samir',
        	'email' => 'samir@gmail.com',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
    	]);
    }
}
