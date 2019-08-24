<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nonoh',
            'email' => 'nonoh@test.com',
            'password' => bcrypt('123456'),
            'country_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@test.com',
            'password' => bcrypt('123456'),
            'country_id' => 2
        ]);
    }
}
