<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$users = [
					[
								'name'       => 'admin',
								'email'      => 'admin@cw.com',
								'password'   => Hash::make('admin'),
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'name'       => 'yousuf',
								'email'      => 'yousuf@cw.com',
								'password'   => Hash::make('yousuf'),
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'name'       => 'user',
								'email'      => 'user@cw.com',
								'password'   => Hash::make('user'),
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]

		];

		DB::table('users')->insert($users);

		foreach(range(4, 50) as $index)
		{
			User::create([
						'name' => $faker->userName,
						'email' => $faker->email,
						'password' 	=> Hash::make('u'),
						'created_at' => date('Y-m-d H:i:s'),
						'updated_at' => date('Y-m-d H:i:s')


			]);




		}
	}

}