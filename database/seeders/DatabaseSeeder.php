<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

    // // Disable foreign key checks
    // \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    // Post::truncate();
    // Category::truncate();
    // User::truncate();

    // // Re-enable foreign key checks
    // \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // User::factory(10)->create();
    // truncate the categories and user table before seeding
      
    $user = User::factory()->create([

        ]);
        
    Post::factory(10)->create(
        [
            // 'user_id' => $user->id,
          // Create a category for each post
        ]
    );
    

    

  

//         $personal=Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal'
//         ]);
//           $work=Category::create([
//             'name' => 'Work',
//             'slug' => 'work'
//         ]);
//          $technology= Category::create([
//             'name' => 'Technology',
//             'slug' => 'technology'
//         ]);
//            $family=Category::create([
//             'name' => 'Family',
//             'slug' => 'family'
//         ]);

//         Post::create([
//             'user_id' => $user->id,
//              'category_id' => $personal->id,
//             'slug' => 'my-first-post',
//             'title' => 'My First Post',
//             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
//             'body' => '<p>Gardening is one of the most rewarding hobbies you can take up. Not only does it beautify your surroundings, but it also provides fresh produce and flowers. To start a garden, you first need to choose the right location that gets adequate sunlight. Prepare the soil by removing weeds and adding compost or fertilizer. Select plants that are suitable for your climate zone and consider their water requirements. 

// When planting, make sure to space them properly to allow for growth. Regular watering is essential, especially during dry spells. Mulching helps retain moisture and suppress weeds. Prune your plants to encourage healthy growth and remove dead or diseased parts. Watch out for pests and use organic methods to control them whenever possible. 

// Gardening requires patience as plants take time to grow. Keep a journal to track your progress and learn from each season. Remember to rotate crops annually to maintain soil health. With time and practice, you\'ll develop a green thumb and create a thriving garden that brings joy throughout the year. The satisfaction of harvesting your own vegetables or cutting flowers from your garden is unparalleled. </p>'
//             ,
//             'published_at' => now()
//         ]);
//        Post::create([
//             'user_id' => $user->id,
//              'category_id' => $work->id,
//             'slug' => 'my-second-post',
//             'title' => 'My Second Post',
//             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
//             'body' => '<p>Gardening is one of the most rewarding hobbies you can take up. Not only does it beautify your surroundings, but it also provides fresh produce and flowers. To start a garden, you first need to choose the right location that gets adequate sunlight. Prepare the soil by removing weeds and adding compost or fertilizer. Select plants that are suitable for your climate zone and consider their water requirements. 

// When planting, make sure to space them properly to allow for growth. Regular watering is essential, especially during dry spells. Mulching helps retain moisture and suppress weeds. Prune your plants to encourage healthy growth and remove dead or diseased parts. Watch out for pests and use organic methods to control them whenever possible. 

// Gardening requires patience as plants take time to grow. Keep a journal to track your progress and learn from each season. Remember to rotate crops annually to maintain soil health. With time and practice, you\'ll develop a green thumb and create a thriving garden that brings joy throughout the year. The satisfaction of harvesting your own vegetables or cutting flowers from your garden is unparalleled.</p>'
//             ,
//             'published_at' => now()
//         ]);
//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $technology->id,
//             'slug' => 'my-third-post',
//             'title' => 'My Third Post',
//             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
//             'body' => '<p>Gardening is one of the most rewarding hobbies you can take up. Not only does it beautify your surroundings, but it also provides fresh produce and flowers. To start a garden, you first need to choose the right location that gets adequate sunlight. Prepare the soil by removing weeds and adding compost or fertilizer. Select plants that are suitable for your climate zone and consider their water requirements. 

// When planting, make sure to space them properly to allow for growth. Regular watering is essential, especially during dry spells. Mulching helps retain moisture and suppress weeds. Prune your plants to encourage healthy growth and remove dead or diseased parts. Watch out for pests and use organic methods to control them whenever possible. 

// Gardening requires patience as plants take time to grow. Keep a journal to track your progress and learn from each season. Remember to rotate crops annually to maintain soil health. With time and practice, you\'ll develop a green thumb and create a thriving garden that brings joy throughout the year. The satisfaction of harvesting your own vegetables or cutting flowers from your garden is unparalleled.</p>',
//             'published_at' => now()
//         ]);
//         Post::create([
//             'user_id' => $user->id,
//             'category_id' => $family->id,
//             'slug' => 'my-fourth-post', 
//             'title' => 'My Fourth Post',
//             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
//             'body' => '<p>Gardening is one of the most rewarding hobbies you can take up. Not only does it beautify your surroundings, but it also provides fresh produce and flowers. To start a garden, you first need to choose the right location that gets adequate sunlight. Prepare the soil by removing weeds and adding compost or fertilizer. Select plants that are suitable for your climate zone and consider their water requirements. 

// When planting, make sure to space them properly to allow for growth. Regular watering is essential, especially during dry spells. Mulching helps retain moisture and suppress weeds. Prune your plants to encourage healthy growth and remove dead or diseased parts. Watch out for pests and use organic methods to control them whenever possible. 

// Gardening requires patience as plants take time to grow. Keep a journal to track your progress and learn from each season. Remember to rotate crops annually to maintain soil health. With time and practice, you\'ll develop a green thumb and create a thriving garden that brings joy throughout the year. The satisfaction of harvesting your own vegetables or cutting flowers from your garden is unparalleled.</p>',
//             'published_at' => now()
//         ]);
   
    }
}
