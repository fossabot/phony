<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class SlackEmojiTest extends BaseTest
{
    protected string $regex = '/^:([\w-]+):$/';

    // region Attributes

    /** @test */
    public function people_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->people
        );
    }

    /** @test */
    public function nature_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->nature
        );
    }

    /** @test */
    public function food_and_drink_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->food_and_drink
        );
    }

    /** @test */
    public function celebration_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->celebration
        );
    }

    /** @test */
    public function activity_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->activity
        );
    }

    /** @test */
    public function travel_and_place_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->travel_and_place
        );
    }

    /** @test */
    public function object_and_symbol_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->object_and_symbol
        );
    }

    /** @test */
    public function custom_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->custom
        );
    }

    /** @test */
    public function emoji_attribute(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->emoji
        );
    }

    // endregion
}
