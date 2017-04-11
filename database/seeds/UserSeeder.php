<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

			User::create
			([
				'name'=>"Alejandro",
				'email'=>"alejo_mateus_@hotmail.com",
				'password'=>Hash::make("123")
			]);
		
	}

}
