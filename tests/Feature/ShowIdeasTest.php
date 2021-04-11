<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Idea;
use App\Models\Category;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page()
    {

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $ideaOne     = Idea::factory()->create([

            'title'         => 'My first idea',
            'category_id'   => $categoryOne->id,
            'description'   => 'Description of My first idea',

        ]);

        $ideaTwo     = Idea::factory()->create([

            'title' => 'My second idea',
            'category_id'   => $categoryTwo->id,
            'description' => 'Description of My second idea',

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

        $idea = Idea::factory()->create([

            'title' => 'My first idea',
            'category_id'   => $category->id,
            'description' => 'Description of My first idea',

        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);

    }

    // Laravel has its own way of testing pagination
}
