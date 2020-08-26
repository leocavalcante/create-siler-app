<?php declare(strict_types=1);

namespace App\Test\Unit;

it('should greet Hello, World!', function () {
    $hw = new \App\Greeter('Hello, World!');
    assertSame('Hello, World!', $hw->greet());
});
