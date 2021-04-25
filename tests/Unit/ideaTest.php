<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;

class ideaTest extends TestCase
{


    use RefreshDatabase;

    /** @test */
    public function can_check_if_idea_is_voted_by_user()
    {
        $user = User::factory()->create();
        $userB = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => 'Open']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'title' => 'My first title',
            'description' => 'Some random description. ',
        ]);

        Vote::factory()->create([
            'idea_id' => $idea->id,
            'user_id' => $user->id
        ]);

        $this->assertTrue($idea->isVotedByuser($user));
        $this->assertFalse($idea->isVotedByuser($userB));
        $this->assertFalse($idea->isVotedByuser(null));

    }
}
