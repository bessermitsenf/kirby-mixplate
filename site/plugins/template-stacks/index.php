<?php

use Kirby\Cms\App as Kirby;

@include_once __DIR__ . '/helpers.php';

load([
    'oweb\\stacks' => __DIR__ . '/src/Stacks.php'
]);

Kirby::plugin('owebstudio/template-stacks', []);
