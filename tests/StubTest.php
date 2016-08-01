<?php

namespace Linter;

class StubTest extends \PHPUnit_Framework_TestCase
{
    public function testJustTwo()
    {   
        $stub = new Stub();
        $this->assertTrue($stub->justTwo());
    }
}
