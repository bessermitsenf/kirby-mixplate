<?php

use Kirby\Cms\App as Kirby;

$base = dirname(__DIR__);

require "{$base}/vendor/autoload.php";

$kirby = new Kirby([
    'roots' => [
        'index' => __DIR__,
        'base' => $base,
        'content' => $base . '/content',
        'site' => $site = $base . '/site',
        'storage' => $storage = $base . '/storage',
        'accounts' => $storage . '/accounts',
        'config' => $storage . '/config',
        'cache' => $storage . '/cache',
        'logs' => $storage . '/logs',
        'sessions' => $storage . '/sessions',
    ]
]);

echo $kirby->render();
