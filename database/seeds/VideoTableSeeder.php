<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('videos')->insert([
            'id' => 1,
            'name' => 'Video Title 1'
        ]);

        DB::table('videos')->insert([
            'id' => 2,
            'name' => 'Video Title 2'
        ]);

        DB::table('videos')->insert([
            'id' => 3,
            'name' => 'Video Title 3'
        ]);
    }
}

