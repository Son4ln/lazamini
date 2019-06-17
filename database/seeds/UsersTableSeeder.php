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
        DB::table('users')->insert([
			'name' => 'Phan Cong',
			'email' => 'pvcong95@rbook.vn',
			'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
			'name' => 'Phan Cong',
			'email' => 'admin@rbook.vn',
			'password' => bcrypt('123456'),
		]);
    }
}
