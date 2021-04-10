<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Idea;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page()
    {

        $ideaOne = Idea::factory()->create([

            'title' => 'My first idea',
            'description' => 'Description of My first idea',

        ]);

        $ideaTwo = Idea::factory()->create([

            'title' => 'My second idea',
            'description' => 'Description of My second idea',

        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
    }


    /** @test */
    public function single_idea_shows_correctly_on_show_page()
    {

        $idea = Idea::factory()->create([

            'title' => 'My first idea',
            'description' => 'Description of My first idea',

        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);

    }

    // Laravel has its own way of testing pagination
}
