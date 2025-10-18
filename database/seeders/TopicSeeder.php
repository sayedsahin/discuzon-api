<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::unsetEventDispatcher();
        Topic::factory(50)->create();
        Activity::setEventDispatcher(app('events'));
    }
}
