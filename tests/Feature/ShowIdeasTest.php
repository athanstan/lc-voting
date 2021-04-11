<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Idea;
use App\Models\Category;
use App\Models\Status;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page()
    {

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $statusOne = Status::factory()->create(['name' => 'Open']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);
        $statusTwo = Status::factory()->create(['name' => 'Implemented']);

        $ideaOne     = Idea::factory()->create([

            'title'         => 'My first idea',
            'category_id'   => $categoryOne->id,
            'status_id'     => $statusOne->id,
            'description'   => 'Description of My first idea',

        ]);

        $ideaTwo     = Idea::factory()->create([

            'title' => 'My second idea',
            'category_id'   => $categoryTwo->id,
            'status_id'     => $statusTwo->id,
            'description'   => 'Description of My second idea',

        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        // $response->assertSee($ideaOne->category);
        $response->assertSee($ideaOne->description);
        $response->assertSee($ideaTwo->title);
        // $response->assertSee($ideaTwo->category);
        $response->assertSee($ideaTwo->description);
    }


    /** @test */
    public function single_idea_shows_correctly_on_show_page()
    {
        $category = Category::factory()->create(['name' => 'Category 1']);
        $status = Status::factory()->create(['name' => 'Open']);

        $idea = Idea::factory()->create([

            'title' => 'My first idea',
            'category_id'   => $category->id,
            'status_id'   => $status->id,
            'description' => 'Description of My first idea',

        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);

    }

    // Laravel has its own way of testing pagination
}
