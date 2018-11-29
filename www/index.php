<?php

include 'kirby/bootstrap.php';

$kirby = new Kirby([
    'roots' => [
        'index' => __DIR__,
        'sessions' => __DIR__ . '/accounts',
        'cache' => __DIR__ . '/cache',
        'sessions' => __DIR__ . '/sessions',
        'root' => $root = dirname(__DIR__),
        'site' => $root . '/src',
        'content' => $root . '/src/content',
        'snippets' => $root . '/src/patterns'
    ]
]);

echo $kirby->render();
