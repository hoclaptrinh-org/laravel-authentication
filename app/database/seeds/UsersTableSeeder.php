<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'first_name' => 'John',
			'last_name' => 'Doe',
			'email' => 'johndoe@example.net',
			'password' => 'mypass',
		));
	}

}