<?php

use Oweb\Stacks;

function endpush(): void
{
    Stacks::end();
}

function push(string $name, bool $once = false): void
{
    Stacks::open($name, $once);
}

function stack(string $name, bool $return = false): string|null
{
    return Stacks::render($name, $return);
}
