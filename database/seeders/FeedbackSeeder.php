<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // new
        DB::table('feedback')->insert([
            'title' => 'improvement',
            'category_id' => 1,
            'user_id' => 2,
            'description' => 'bugs remove and update existing project',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'feedback_id' => 1,
            'user_id' => 2,
            'comment' => 'bugs removed ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feedback_counts')->insert([
            'feedback_id' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // 2
         DB::table('feedback')->insert([
            'title' => 'improvement',
            'category_id' => 1,
            'user_id' => 2,
            'description' => 'improve bugs and fix',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'feedback_id' => 2,
            'user_id' => 2,
            'comment' => 'improve bugs',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feedback_counts')->insert([
            'feedback_id' => 2,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // 3
         DB::table('feedback')->insert([
            'title' => 'Products detail',
            'category_id' => 2,
            'user_id' => 3,
            'description' => 'tAll feature products detail',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'feedback_id' => 3,
            'user_id' => 3,
            'comment' => 'Featured products',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feedback_counts')->insert([
            'feedback_id' => 3,
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // 4
         DB::table('feedback')->insert([
            'title' => 'improvement',
            'category_id' => 3,
            'user_id' => 4,
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'feedback_id' => 4,
            'user_id' => 4,
            'comment' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feedback_counts')->insert([
            'feedback_id' => 4,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // 5
         DB::table('feedback')->insert([
            'title' => 'improvement',
            'category_id' => 2,
            'user_id' => 5,
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'feedback_id' => 5,
            'user_id' => 5,
            'comment' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feedback_counts')->insert([
            'feedback_id' => 5,
            'user_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // 6
         DB::table('feedback')->insert([
            'title' => 'Update products',
            'category_id' => 1,
            'user_id' => 2,
            'description' => '=Update product to latest version',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'feedback_id' => 6,
            'user_id' => 2,
            'comment' => 'product updated',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feedback_counts')->insert([
            'feedback_id' => 6,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
        DB::table('feedback')->insert([
            'title' => 'Update products',
            'category_id' => 1,
            'user_id' => 2,
            'description' => '=Update product to latest version',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'feedback_id' => 6,
            'user_id' => 2,
            'comment' => 'product updated',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('feedback_counts')->insert([
            'feedback_id' => 6,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
