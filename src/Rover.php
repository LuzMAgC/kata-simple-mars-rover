<?php
declare(strict_types=1);

namespace PhpKataSetup;

class Rover
{
    public function move(string $move): string
    {
        if ($move === 'M') {
            return '0:1:N';
        }
        return '0:0:N';
    }
}