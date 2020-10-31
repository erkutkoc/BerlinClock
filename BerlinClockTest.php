<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->berlinClock = new BerlinClock();
    }
    public function testTest() : void
    {
        self::assertEquals(1, 1);
    }
    public function test_getHours_given23_shouldReturn23(){
        $actual = $this->berlinClock->getHours("23:00:00");

        self::assertEquals(23, $actual);
    }
    public function test_getMinutes_given11_shouldReturn11(){
        $actual = $this->berlinClock->getMinutes("23:11:00");

        self::assertEquals(11, $actual);
    }
    public function test_getSecondes_given12_shouldReturn12(){
        $actual = $this->berlinClock->getSecondes("23:11:12");

        self::assertEquals(12, $actual);
    }

}