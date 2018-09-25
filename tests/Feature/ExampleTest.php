<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function a_welcome_page_shoe_up()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function doSomething(){

    }
}
