<?php

use Illuminate\Database\Seeder;

class TaggableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taggables')->insert([
            'tag_id' => 1,
            'taggable_id' =>1,
            'taggable_type' => 'App\Post'
        ]);

        DB::table('taggables')->insert([
            'tag_id' => 2,
            'taggable_id' =>2,
            'taggable_type' => 'App\Post'
        ]);

        DB::table('taggables')->insert([
            'tag_id' => 3,
            'taggable_id' =>1,
            'taggable_type' => 'App\Video'
        ]);
    }
}
