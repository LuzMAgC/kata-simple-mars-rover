<?php
namespace Tests;

use PhpKataSetup\Rover;
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase
{
    /** @test */
    function given_landing_position_returns_0_0_N() {
        $rover = new Rover();
        self::assertSame('0:0:N', $rover->move(''));
    }
}
