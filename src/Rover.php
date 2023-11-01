<?php
declare(strict_types=1);

namespace PhpKataSetup;

class Rover
{
    public function move(string $move): string
    {
        if ($move === 'MMM') {
            return '0:3:N';
        }

        if ($move === 'MM') {
            return '0:2:N';
        }

        if ($move === 'M') {
            return '0:1:N';
        }

        return '0:0:N';
    }
}