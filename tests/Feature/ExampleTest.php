<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(){
        parent::setUp();
       
        factory(Post::class, 10)->create();
    }
    
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function a_welcome_page_show_up()
    {
        $this->get('/')->assertSee('laravel');
    }

    /** @test */
    public function about_page_show_up(){
        $this->get('/about')->assertSee('เกี่ยวกับ');
    }

    /** @test */
    public function a_list_of_posts_show_up(){
        $response = $this->get('/posts');
        $response->assertSuccessful($response);
    }
}
