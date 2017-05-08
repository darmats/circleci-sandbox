<?php

namespace Sample;

use PHPUnit_Framework_TestCase;

class CalcTest extends PHPUnit_Framework_TestCase
{
    /** @var Calc */
    private $calc;

    protected function setUp()
    {
        parent::setUp();
        $this->calc = new Calc();
    }

    public function testAdd()
    {
        self::assertSame(3, $this->calc->add(1, 2));
    }
}
