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
        DB::table('users')->delete();
		DB::table('users')->insert([
			'name'=> 'Carl Joseph',
			'email'=>'arewenotkingsmen@gmail.com',
			'password'=> Hash::make('me'),
			'program'=>'trippledexter',
		 
		]);
    }
}
