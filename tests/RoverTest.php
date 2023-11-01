<?php
declare(strict_types=1);

namespace Tests;

use Iterator;
use PhpKataSetup\Rover;
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase
{
    static function movingForwardProvider(): Iterator  {
        yield 'moving once' => ['0:1:N', 'M'];
        yield 'moving twice' => ['0:2:N', 'MM'];
        yield 'moving third' => ['0:3:N', 'MMM'];
    }

    /**
     * @test
     * @dataProvider movingForwardProvider
     */
    function given_a_command_forward_when_rover_is_in_landing_position(string $position, string $command) {
        $rover = new Rover();
        self::assertSame($position, $rover->move($command));
    }

    /** @test */
    function given_landing_position_returns_0_0_N() {
        $rover = new Rover();
        self::assertSame('0:0:N', $rover->move(''));
    }
}
