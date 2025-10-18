<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Qirolab\Laravel\Reactions\Models\Reaction;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Type::factory()->create();
        // \App\Models\Category::factory()->create();


        // \App\Models\Topic::factory(20)->create();
        // \App\Models\Reply::factory(50)->create();
        // \App\Models\Tag::factory(10)->create();

        /*
        | you must be Reacton Model copy
        | to app/models/reaction
        | from Qirolab\Laravel\Reactions\Models
        */
        // Reaction::factory(10)->create();
        $this->call([
            UserSeeder::class,
            TypeSeeder::class,
            CategorySeeder::class,
            TopicSeeder::class,
            ReplySeeder::class,
            TagSeeder::class,

            // you need custom reaction model for seeding "app/models/reaction.php"
            // ReactionSeeder::class,
        ]);


    }
}
