<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'id' => 1,
            'name' => 'Australia',
            
        ]);

        DB::table('countries')->insert([
            'id' => 2,
            'name' => 'China',
            
        ]);
    }
}
