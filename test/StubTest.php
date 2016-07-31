<?php

namespace Linter;

class StubTest extends \PHPUnit_Framework_TestCase
{
    public function testJustTwo()
    {
        $this->assertEquals(2, new Stub()->justTwo());
    }
}
