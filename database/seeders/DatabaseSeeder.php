<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Idea;
use App\Models\User;
use App\Models\Vote;
use App\Models\Category;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create([
            'name' => 'Thanos',
            'email'=> 'stantzouris.thanos@gmail.com'
        ]);

        User::factory(19)->create();

        // Create 4 new categories on database seed
        Category::factory()->create(['name' => 'Category 1']);
        Category::factory()->create(['name' => 'Category 2']);
        Category::factory()->create(['name' => 'Category 3']);
        Category::factory()->create(['name' => 'Category 4']);

        Status::factory()->create(['name' => 'Open']);
        Status::factory()->create(['name' => 'Considering']);
        Status::factory()->create(['name' => 'In Progress']);
        Status::factory()->create(['name' => 'Implemented']);
        Status::factory()->create(['name' => 'Closed']);

        // \App\Models\User::factory(10)->create();
        Idea::factory(100)->create();

        // Generate Unique Votes. Ensure idea_id and user_id are unique for each row

        // For some kind of reason range() doesn't work
        foreach (range(1, 20) as $user_id ) {

            foreach (range(1, 100) as $idea_id ) {

                // if($idea_id % 2 === 0)

                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);


            }
        } //endforeach



    }
}
