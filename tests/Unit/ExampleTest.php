<?php

namespace Tests\Unit;

use App\Example;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_normal_case()
    {
        $example = new Example();
        $result = $example->execute(1);
        $this->assertEquals(1, $result);
        $result = $example->execute(0);
        $this->assertEquals(0, $result);
    }

    public function test_devided_by_three(){
        $example = new Example();
        $result = $example->execute(3);
        $this->assertEquals("Fizz", $result);
        $result = $example->execute(6);
        $this->assertEquals("Fizz", $result);
    }

    public function test_devided_by_five(){
        $example = new Example();
        $result = $example->execute(5);
        $this->assertEquals("Buzz", $result);
        $result = $example->execute(10);
        $this->assertEquals("Buzz", $result);
    }

    public function test_devided_by_fifteen(){
        $example = new Example();
        $result = $example->execute(15);
        $this->assertEquals("FizzBuzz", $result);
        $result = $example->execute(30);
        $this->assertEquals("FizzBuzz", $result);
    }

}
