<?php

namespace Tests\Unit;

//use Tests\TestCase;
use PHPUnit\Framework\TestCase;

class firstTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_input_missing_a_title_is_rejected()
    {
        $response = $this->post(route('post.store'), ['title' => 'test title']);
        $response->assertRedirect();
        $response->assertSessionHasErrors();
//        $response->assert
    }


}
