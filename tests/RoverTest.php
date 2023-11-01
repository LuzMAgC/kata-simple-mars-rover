<?php
declare(strict_types=1);

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

    /** @test */
    function given_a_command_forward_when_rover_is_in_landing_position_returns_0_1_N() {
        $rover = new Rover();
        self::assertSame('0:1:N', $rover->move('M'));
    }

    /** @test */
    function given_two_command_forward_when_rover_is_in_landing_position_returns_0_2_N() {
        $rover = new Rover();
        self::assertSame('0:2:N', $rover->move('MM'));
    }

    /** @test */
    function given_three_command_forward_when_rover_is_in_landing_position_returns_0_3_N() {
        $rover = new Rover();
        self::assertSame('0:3:N', $rover->move('MMM'));
    }
}
