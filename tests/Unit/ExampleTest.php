<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPushAndPop()
    {
        $users = [];
        $this->assertSame(0, count($users));

        array_push($users, 'hamed');
        $this->assertSame('hamed', $users[count($users) -1]);
        $this->assertSame(1, count($users));

        $this->assertSame('hamed', array_pop($users));
        $this->assertSame(0, count($users));

    }
}
