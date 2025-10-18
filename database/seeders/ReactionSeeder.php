<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;
use Qirolab\Laravel\Reactions\Models\Reaction;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::unsetEventDispatcher();
        Reaction::factory(10)->create();
        Activity::setEventDispatcher(app('events'));
    }
}
