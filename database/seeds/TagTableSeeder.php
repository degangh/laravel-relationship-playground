<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'fun'
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'name' => 'barbecue'
        ]);

        DB::table('tags')->insert([
            'id' => 3,
            'name' => 'china'
        ]);
    }
}
