<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Tag;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // DB::table('admins')->insert([
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => bcrypt('admin123'),
        //     ]
        // ]);

        // DB::table('users')->insert([
        //     [
        //         'name' => 'User',
        //         'email' => 'user@gmail.com',
        //         'password' => bcrypt('admin123'),
        //     ]
        // ]);

        Post::factory()->times(20)->create();
        Tag::factory()->times(4)->create();

        for($i = 0; $i < 20; $i++) {
            \App\Models\PostTag::factory()->create([
                'post_id' => Post::all()->random()->id,
                'tag_id' => Tag::all()->random()->id
            ]);
        }
    }
}
