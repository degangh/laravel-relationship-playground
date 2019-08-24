<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'id' => 1,
            'body' => 'comment body 1',
            'commentable_id' => 1,
            'commentable_type' => 'post'
        ]);

        DB::table('comments')->insert([
            'id' => 2,
            'body' => 'comment body 2',
            'commentable_id' => 2,
            'commentable_type' => 'post'
        ]);
    }
}
