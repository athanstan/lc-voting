<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;

use PHPUnit\Framework\TestCase;

class StatusTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function can_get_count_of_each_status()
    {
        $user = User::factory()->create();
        // $categoryOne = Category->factory()->create(['name', 'Category 1']);

        $this->assertTrue(true);
    }
}
