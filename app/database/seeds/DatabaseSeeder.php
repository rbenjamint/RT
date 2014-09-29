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

		$this->call('UsersTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('BlocksTableSeeder');
		$this->call('PageBlocksTableSeeder');
		$this->call('TemplateTableSeeder');
		$this->call('TemplateConfigTableSeeder');
	}

}
