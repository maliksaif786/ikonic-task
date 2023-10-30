<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //conversations1
        DB::table('conversations')->insert([
            'sender_id' => 2,
            'receiver_id' => 1,
            'title' => 'improvement',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 1,
            'user_id' => 2,
            'message' => 'improve bugs and fix code',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 1,
            'user_id' => 1,
            'message' => 'bugs impoved you can check now',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //conversations2
        DB::table('conversations')->insert([
            'sender_id' => 3,
            'receiver_id' => 1,
            'title' => 'Delete product',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 2,
            'user_id' => 3,
            'message' => 'Delete products of unauthunticated users',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 2,
            'user_id' => 1,
            'message' => 'products deleted successfully ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //conversations3
        DB::table('conversations')->insert([
            'sender_id' => 4,
            'receiver_id' => 1,
            'title' => 'User Authentication',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 3,
            'user_id' => 4,
            'message' => 'Check user is authenticated or not',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 3,
            'user_id' => 1,
            'message' => 'Checked authentication',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //conversations4
        DB::table('conversations')->insert([
            'sender_id' => 5,
            'receiver_id' => 1,
            'title' => 'improvement',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 4,
            'user_id' => 5,
            'message' => 'start',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 4,
            'user_id' => 1,
            'message' => 'reply',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //conversations5
        DB::table('conversations')->insert([
            'sender_id' => 5,
            'receiver_id' => 1,
            'title' => 'improvement',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 5,
            'user_id' => 5,
            'message' => 'start',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'conversation_id' => 5,
            'user_id' => 1,
            'message' => 'reply',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
