<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => 1,
            'user_id' => 1,
            'title' => 'Title 1'
        ]);

        DB::table('posts')->insert([
            'id' => 2,
            'user_id' => 1,
            'title' => 'Title 2'
        ]);

        DB::table('posts')->insert([
            'id' => 3,
            'user_id' => 2,
            'title' => 'Title 3'
        ]);
    }
}
