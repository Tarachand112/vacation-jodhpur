<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = new User;
		$user->name = 'Kapil Sharma';
		$user->email = 'kapil@gmail.com';
		$user->password = \Hash::make('kapil');
		$user->role = 'admin';
		$user->save();
	}
}
