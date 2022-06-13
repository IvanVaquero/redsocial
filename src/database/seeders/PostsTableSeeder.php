<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(
            [
                'title' => 'Ivan Vaquero',
                'image' => 'ivaquero@demo.com',
                'body' => bcrypt('secret'),
                'type_id' => 2,
                'user_id' => 1,
            ],
            [
                'title' => 'Ivan Vaquero',
                'image' => 'ivaquero@demo.com',
                'body' => bcrypt('secret'),
                'type_id' => 3,
                'user_id' => 1,
            ],
            [
                'title' => 'Ivan Vaquero',
                'image' => 'ivaquero@demo.com',
                'body' => bcrypt('secret'),
                'type_id' => 1,
                'user_id' => 1,
            ],
            [
                'title' => 'Ivan Vaquero',
                'image' => 'ivaquero@demo.com',
                'body' => bcrypt('secret'),
                'type_id' => 2,
                'user_id' => 1,
            ],
            [
                'title' => 'Ivan Vaquero',
                'image' => 'ivaquero@demo.com',
                'body' => bcrypt('secret'),
                'type_id' => 1,
                'user_id' => 1,
            ],

    );
    }
}
