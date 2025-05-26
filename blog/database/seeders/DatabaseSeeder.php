<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory(3)->create();
        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        $work = Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby'
        ]);

        Post::create([
            'user_id' => $user[0]->id,
            'category_id' => $personal->id,
            'title' => 'Lorem Ipsum Dolor Sit',
            'slug' => 'primer-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
        ]);

        Post::create([
            'user_id' => $user[1]->id,
            'category_id' => $family->id,
            'title' => 'Sed Ut Perspiciatis',
            'slug' => 'segundo-post',
            'excerpt' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>',
            'body' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>',
        ]);

        Post::create([
            'user_id' => $user[2]->id,
            'category_id' => $work->id,
            'title' => 'At Vero Eos Et Accusamus',
            'slug' => 'tercer-post',
            'excerpt' => '<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>',
            'body' => '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>',
        ]);


    }
}
