<?php

namespace Phony\Test\Group\Standard;

use Phony\Test\BaseTest;

class SlackEmojiTest extends BaseTest
{
    protected string $regex = '/^:([\w-]+):$/';

    protected function setUp(): void
    {
        parent::setUp();

        $this->🧪 = $this->🙃->slack_emoji;
    }

    // region Attributes

    /** @test */
    public function people(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->people
        );
    }

    /** @test */
    public function nature(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->nature
        );
    }

    /** @test */
    public function food_and_drink(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->food_and_drink
        );
    }

    /** @test */
    public function celebration(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->celebration
        );
    }

    /** @test */
    public function activity(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->activity
        );
    }

    /** @test */
    public function travel_and_place(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->travel_and_place
        );
    }

    /** @test */
    public function object_and_symbol(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->object_and_symbol
        );
    }

    /** @test */
    public function custom(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->custom
        );
    }

    /** @test */
    public function emoji(): void
    {
        $this->assertMatchesRegularExpression(
            $this->regex,
            $this->🧪->emoji
        );
    }

    // endregion
}
