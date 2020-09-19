<?php

declare(strict_types=1);

namespace App\Test\Unit;

use App\Greeter;

use function PHPUnit\Framework\assertSame;
use function it;

it(
    'should greet Hello, World!',
    function () {
        $hw = new Greeter('Hello, World!');
        assertSame('Hello, World!', $hw->greet());
    },
);
