<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 authors
        $authors = Author::factory()->count(5)->create();

        // Create 50 posts and assign random authors
        Post::factory()->count(50)->make()->each(
            function ($post) use ($authors) {
                $post->author_id = $authors->random()->id;
                $post->save();
            }
        );
    }
}
