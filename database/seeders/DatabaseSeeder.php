<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Messi',
        //     'email' => 'messi@gacor.com',
        //     'password' => bcrypt('messi')
        // ]);

        User::create([
            'name' => 'Ronaldo',
            'username' => 'ronaldo',
            'email' => 'ronaldo@gacor.com',
            'password' => bcrypt('ronaldo')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, dolore!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, culpa at. Voluptatibus quam fugiat, reiciendis, inventore consequatur libero magni molestias laboriosam illo omnis vitae quibusdam, hic deleniti repellendus. Autem officia similique magni adipisci, tempore saepe corrupti dolor. Voluptatum numquam, dignissimos quo id explicabo corporis hic! Vero neque ut reiciendis dolor voluptates consequatur adipisci rem hic inventore nihil, ipsa odio ab eligendi aspernatur pariatur omnis sint vitae quae doloribus illum non laborum quod suscipit quos. Pariatur ratione obcaecati sunt officiis, sequi qui? Unde nesciunt, facilis at molestias accusantium non distinctio commodi mollitia dolores ullam rerum ex odio excepturi fugit omnis quis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, dolore!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, culpa at. Voluptatibus quam fugiat, reiciendis, inventore consequatur libero magni molestias laboriosam illo omnis vitae quibusdam, hic deleniti repellendus. Autem officia similique magni adipisci, tempore saepe corrupti dolor. Voluptatum numquam, dignissimos quo id explicabo corporis hic! Vero neque ut reiciendis dolor voluptates consequatur adipisci rem hic inventore nihil, ipsa odio ab eligendi aspernatur pariatur omnis sint vitae quae doloribus illum non laborum quod suscipit quos. Pariatur ratione obcaecati sunt officiis, sequi qui? Unde nesciunt, facilis at molestias accusantium non distinctio commodi mollitia dolores ullam rerum ex odio excepturi fugit omnis quis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, dolore!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, culpa at. Voluptatibus quam fugiat, reiciendis, inventore consequatur libero magni molestias laboriosam illo omnis vitae quibusdam, hic deleniti repellendus. Autem officia similique magni adipisci, tempore saepe corrupti dolor. Voluptatum numquam, dignissimos quo id explicabo corporis hic! Vero neque ut reiciendis dolor voluptates consequatur adipisci rem hic inventore nihil, ipsa odio ab eligendi aspernatur pariatur omnis sint vitae quae doloribus illum non laborum quod suscipit quos. Pariatur ratione obcaecati sunt officiis, sequi qui? Unde nesciunt, facilis at molestias accusantium non distinctio commodi mollitia dolores ullam rerum ex odio excepturi fugit omnis quis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, dolore!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, culpa at. Voluptatibus quam fugiat, reiciendis, inventore consequatur libero magni molestias laboriosam illo omnis vitae quibusdam, hic deleniti repellendus. Autem officia similique magni adipisci, tempore saepe corrupti dolor. Voluptatum numquam, dignissimos quo id explicabo corporis hic! Vero neque ut reiciendis dolor voluptates consequatur adipisci rem hic inventore nihil, ipsa odio ab eligendi aspernatur pariatur omnis sint vitae quae doloribus illum non laborum quod suscipit quos. Pariatur ratione obcaecati sunt officiis, sequi qui? Unde nesciunt, facilis at molestias accusantium non distinctio commodi mollitia dolores ullam rerum ex odio excepturi fugit omnis quis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
