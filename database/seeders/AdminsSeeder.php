<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->delete();

		\DB::table('admins')->insert(array(

			0 => array(
				'id' => 1,
				'name' => 'Admin',
				'email' => 'jashjaymoh@gmail.com',
				'password' => '$2a$12$gyjS6KMK6RLlwd/YCNbTDe84lOmjMA3.4zVbMA0iHPVljLoQolsNW',
				'created_at' => '2020-01-21 22:43:54',
				'updated_at' => '2020-01-26 01:37:57',
			),
		));
    }
}
