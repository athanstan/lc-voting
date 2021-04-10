<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;


class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_a()
    {

        $user = User::factory()->create([
            'name' => 'Thanos',
            'email' => 'afakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals(
            'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-1.png',
            $gravatarUrl
        );

        // You can use Http to check response if image exists

    }
    /** @test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_z()
    {

        $user = User::factory()->create([
            'name' => 'Thanos',
            'email' => 'zfakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals(
            'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-26.png',
            $gravatarUrl
        );

    }
    /** @test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_0()
    {

        $user = User::factory()->create([
            'name' => 'Thanos',
            'email' => '0fakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals(
            'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-27.png',
            $gravatarUrl
        );

    }

    /** @test */
    public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_9()
    {

        $user = User::factory()->create([
            'name' => 'Thanos',
            'email' => '9fakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals(
            'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-36.png',
            $gravatarUrl
        );

    }
}
