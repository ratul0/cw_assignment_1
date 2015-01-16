<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntrustTableSeeder extends Seeder {

	public function run()
	{
		$admin = Role::find(1);
		$user = Role::find(2);

		$create_user = Permission::find(2);

		$admin->attachPermission($create_user);

		$user1 = User::find(1);
		$user2 = User::find(2);
		$user3 = User::find(3);

		$user1->attachRole($admin);
		$user2->attachRole($admin);
		$user3->attachRole($user);

		for($i=4;$i<=50;$i++){
			$user_ids[] = $i;
		}


		$userfaker = User::whereIn('id',$user_ids)->get();

		foreach($userfaker as $userf){
			$userf->attachRole($user);

		}


	}

}