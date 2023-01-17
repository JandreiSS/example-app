<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
        
        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae vel blanditiis dolorum, perspiciatis ipsum iste provident adipisci quidem voluptate quas id porro eos ipsam laborum officia vero magnam facilis.',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae vel blanditiis dolorum, perspiciatis ipsum iste provident adipisci quidem voluptate quas id porro eos ipsam laborum officia vero magnam facilis.',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobbies Post',
            'slug' => 'my-hobbies-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi repudiandae vel blanditiis dolorum, perspiciatis ipsum iste provident adipisci quidem voluptate quas id porro eos ipsam laborum officia vero magnam facilis.',
        ]);
    }
}
