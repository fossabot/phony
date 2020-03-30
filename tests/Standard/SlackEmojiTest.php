<?php

namespace Deligoez\Phony\Tests\Standard;

use Deligoez\Phony\Tests\BaseTest;

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
        $this->assertRegExp(
            $this->regex,
            $this->🧪->people
        );
    }

    /** @test */
    public function nature(): void
    {
        $this->assertRegExp(
            $this->regex,
            $this->🧪->nature
        );
    }

    /** @test */
    public function food_and_drink(): void
    {
        $this->assertRegExp(
            $this->regex,
            $this->🧪->food_and_drink
        );
    }

    /** @test */
    public function celebration(): void
    {
        $this->assertRegExp(
            $this->regex,
            $this->🧪->celebration
        );
    }

    /** @test */
    public function activity(): void
    {
        $this->assertRegExp(
            $this->regex,
            $this->🧪->activity
        );
    }

    /** @test */
    public function travel_and_places(): void
    {
        $this->assertRegExp(
            $this->regex,
            $this->🧪->travel_and_places
        );
    }

    /** @test */
    public function objects_and_symbols(): void
    {
        $this->assertRegExp(
            $this->regex,
            $this->🧪->objects_and_symbols
        );
    }

    /** @test */
    public function custom(): void
    {
        $this->assertRegExp(
            $this->regex,
            $this->🧪->custom
        );
    }

    /** @test */
    public function emoji(): void
    {
        $this->assertRegExp(
            $this->regex,
            $this->🧪->emoji
        );
    }

    // endregion
}
