<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('UserTableSeeder');		
		$this->command->info('User table seeded by iigal ;)');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
				'username' => 'super',
				'password' => Hash::make('super'),
				'roles'	   => 'superadmin'
		));
		User::create(array(
				'username' => 'admin',
				'password' => Hash::make('admin'),
				'roles'	   => 'admin'
		));
		User::create(array(
				'username' => 'admin1',
				'password' => Hash::make('admin1'),
				'roles'	   => 'admin'
		));
	}

}
