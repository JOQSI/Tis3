<?php

use Collect\Collect;
use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    private $collect;

    protected function setUp(): void
    {
        $this->collect = new Collect();
    }

    public function testPush()
    {
        $this->collect->push(1);
        $this->collect->push(2);
        $this->collect->push(3);
        $this->collect->push(4);

        $this->assertEquals([1, 2, 3, 4], $this->collect->toArray());
    }

    public function testUnshift()
    {
        $this->collect->unshift(3);
        $this->collect->unshift(2);
        $this->collect->unshift(1);
        $this->collect->unshift(0);

        $this->assertEquals([0, 1, 2, 3], $this->collect->toArray());
    }

    public function testShift()
    {
        $this->collect->push(1);
        $this->collect->push(2);
        $this->collect->push(3);

        $this->collect->shift();
        $this->assertEquals([2, 3], $this->collect->toArray());
    }

    public function testCount()
    {
        $this->collect->push(1);
        $this->collect->push(2);
        $this->collect->push(3);

        $this->assertEquals(3, $this->collect->count());
    }
}