<?php

namespace Tests\Features;

use Tests\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase;

class PagesTest extends TestCase
{
    use CreatesApplication;

    public function test_it_displays_the_home_page()
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_it_displays_the_talks()
    {
        $this->get('/talks')->assertStatus(200);
    }

    public function test_it_displays_the_newsletter()
    {
        $this->get('/newsletter')->assertStatus(200);
    }

    public function test_it_displays_a_post_page()
    {
        $this->get('/2018/02/botman-build-a-chatbot-video-course')->assertStatus(200);
    }
}
