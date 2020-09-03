<?php

declare(strict_types=1);

namespace App;

final class Greeter
{
    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function greet(): string
    {
        return $this->message;
    }
}
