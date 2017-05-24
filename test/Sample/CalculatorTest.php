<?php

namespace Sample;

use PHPUnit_Framework_TestCase;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    /** @var Calculator */
    private $calculator;

    protected function setUp()
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        self::assertSame(3, $this->calculator->add(1, 2));
    }

    public function testSub()
    {
        self::assertSame(1, $this->calculator->sub(2, 1));
        self::assertSame(-1, $this->calculator->sub(1, 2));
    }
}
