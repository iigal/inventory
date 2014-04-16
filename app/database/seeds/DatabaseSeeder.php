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
<<<<<<< HEAD
		$this->call('SpareTableSeeder');
		$this->command->info(' N Spare table seeded by iigal ;)');
		$this->call('ModelTableSeeder');
		$this->command->info(' N Model table seeded by iigal ;)');
		$this->call('ProviderTableSeeder');
		$this->command->info(' N Provider table seeded by iigal ;)');
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

class SpareTableSeeder extends Seeder {

	public function run()
	{
		DB::table('spares')->delete();

		Spare::create(array(
		'name' => 'PDA',
		'state' => 1
		));
		Spare::create(array(
		'name' => 'LCD',
		'state' => 1
		));
		Spare::create(array(
		'name' => 'Charging Connector',
		'state' => 1
		));
		Spare::create(array(
		'name' => 'Sim Tray',
		'state' => 1
		));
		Spare::create(array(
		'name' => 'Flash IC',
		'state' => 0
		));
				
	}

}

class ModelTableSeeder extends Seeder {

	public function run()
	{
		DB::table('models')->delete();

		Model::create(array(
		'name' => 'S5',
		'state' => 1
		));
		Model::create(array(
		'name' => 'TX',
		'state' => 1
		));
		Model::create(array(
		'name' => 'S1',
		'state' => 1
		));
		Model::create(array(
		'name' => 'S2',
		'state' => 1
		));
		Model::create(array(
		'name' => 'S9',
		'state' => 0
		));

	}

}

class ProviderTableSeeder extends Seeder {

	public function run()
	{
		DB::table('providers')->delete();

		Provider::create(array(
		'name' => 'From India',
		'state' => 1
		));
		Provider::create(array(
		'name' => 'Caniblized',
		'state' => 1
		));
		Provider::create(array(
		'name' => 'Local Market',
		'state' => 1
		));

=======
>>>>>>> 8d3956cbb66b83bb785da0b64e98c5e38a5bf829
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
