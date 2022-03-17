<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory : 
        // User::factory(5)->create(); ->contoh factory
 
        // command untuk seed -> php artisan migrate:fresh --seed
       
    //   seed manual -> kalau pake factory ini dicomment
        // User::create([
        //     'name' => 'Erza Janitradevi',
        //     'email' => 'erzajanitra@gmail.com',
        //     'password' => bcrypt('12345'),

        // ]);
        // User::create([
        //     'name' => 'Meilin Lee',
        //     'email' => 'meilee@gmail.com',
        //     'password' => bcrypt('229910'),

        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Arts and Entertaiment',
            'slug' => 'arts-entertaiment'
        ]);
          
        Category::create([
            'name' => 'Tech',
            'slug' => 'tech'
        ]);

        Category::create([
            'name' => 'Climate Solutions',
            'slug' => 'climate-solutions'
        ]);

        Article::factory(20)->create();

        // Article::create([
        //     'title' => 'Connecting modern abstraction with personal identity',
        //     'slug' => 'art-gallery-shows-painting',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, modi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium officia delectus suscipit sed hic, labore sit dolore consequuntur modi, soluta eveniet temporibus tempora obcaecati. Sint reprehenderit, dolorum eius blanditiis vero repellat nihil quo porro hic facere beatae eveniet cupiditate quos earum, ullam voluptate saepe illo consequuntur nulla eum consequatur impedit! Cum quisquam omnis labore quis, beatae sit impedit quidem quas id officiis? Nihil, repellat fuga, vel at voluptatum nam alias necessitatibus, suscipit pariatur perspiciatis unde facilis rerum molestiae libero quidem! Repellat fugit, consequatur iste esse magnam, delectus aspernatur eum enim, omnis quaerat aut pariatur ea in commodi beatae quas earum est iusto. Libero recusandae placeat a ab quibusdam voluptas mollitia quo id officiis et qui suscipit laboriosam, esse est? Odit?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     // 'author' => 'Erza Janitradevi',

    //   seed manual -> kalau pake factory ini dicomment
                 // ]);
        // Article::create([
        //     'title' => 'Music and painting create an immersive journey',
        //     'slug' => 'art-gallery-shows-music',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, modi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium officia delectus suscipit sed hic, labore sit dolore consequuntur modi, soluta eveniet temporibus tempora obcaecati. Sint reprehenderit, dolorum eius blanditiis vero repellat nihil quo porro hic facere beatae eveniet cupiditate quos earum, ullam voluptate saepe illo consequuntur nulla eum consequatur impedit! Cum quisquam omnis labore quis, beatae sit impedit quidem quas id officiis? Nihil, repellat fuga, vel at voluptatum nam alias necessitatibus, suscipit pariatur perspiciatis unde facilis rerum molestiae libero quidem! Repellat fugit, consequatur iste esse magnam, delectus aspernatur eum enim, omnis quaerat aut pariatur ea in commodi beatae quas earum est iusto. Libero recusandae placeat a ab quibusdam voluptas mollitia quo id officiis et qui suscipit laboriosam, esse est? Odit?',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     // 'author' => 'Erza Janitradevi',
         
        // ]);
        // Article::create([
        //     'title' => 'These are the best games to play on the PlayStation 5',
        //     'slug' => 'best-games-to-play',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, modi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium officia delectus suscipit sed hic, labore sit dolore consequuntur modi, soluta eveniet temporibus tempora obcaecati. Sint reprehenderit, dolorum eius blanditiis vero repellat nihil quo porro hic facere beatae eveniet cupiditate quos earum, ullam voluptate saepe illo consequuntur nulla eum consequatur impedit! Cum quisquam omnis labore quis, beatae sit impedit quidem quas id officiis? Nihil, repellat fuga, vel at voluptatum nam alias necessitatibus, suscipit pariatur perspiciatis unde facilis rerum molestiae libero quidem! Repellat fugit, consequatur iste esse magnam, delectus aspernatur eum enim, omnis quaerat aut pariatur ea in commodi beatae quas earum est iusto. Libero recusandae placeat a ab quibusdam voluptas mollitia quo id officiis et qui suscipit laboriosam, esse est? Odit?',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     // 'author' => 'Erza Janitradevi',
         
        // ]);
    }
}
