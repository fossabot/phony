<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class SlackEmojiTest extends BaseTest
{
    protected string $regex = '/^:([\w-]+):$/';

    // region Attributes

    /** @test */
    public function people(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->people
        );
    }

    /** @test */
    public function nature(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->nature
        );
    }

    /** @test */
    public function food_and_drink(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->food_and_drink
        );
    }

    /** @test */
    public function celebration(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->celebration
        );
    }

    /** @test */
    public function activity(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->activity
        );
    }

    /** @test */
    public function travel_and_place(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->travel_and_place
        );
    }

    /** @test */
    public function object_and_symbol(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->object_and_symbol
        );
    }

    /** @test */
    public function custom(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->custom
        );
    }

    /** @test */
    public function emoji(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🙃->slack_emoji->emoji
        );
    }

    // endregion
}
