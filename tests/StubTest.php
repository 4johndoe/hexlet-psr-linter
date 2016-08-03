<?php

namespace Linter;

class StubTest extends \PHPUnit_Framework_TestCase
{
    public function testJustTrue()
    {
        $stub = new Stub();
        $this->assertTrue($stub->justTrue());
    }
}
