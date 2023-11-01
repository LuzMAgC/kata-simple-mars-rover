<?php
declare(strict_types=1);

namespace PhpKataSetup;

class Rover
{
    public function move(string $command): string
    {
        return '0:' . strlen($command) . ':N';
    }
}