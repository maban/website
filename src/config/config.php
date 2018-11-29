<?php

return [
    // Environment
    'cache' => true,
    'debug' => false,
    'url' => 'https://beta.bradshaws.guide',
    'whoops' => false,

    // Markdown
    'markdown' => [
        'extra' => true
    ],

    // Database
    'db' => [
        'type' => 'sqlite',
        'database' => 'site.db'
    ],

    // Routes
    'routes' => [[
        'pattern' => 'app.webmanifest',
        'action' => function () {
            return tpl::load(kirby()->roots()->templates().DS.'app.webmanifest.php', [
                'site' => kirby()->site()
            ]);
        }
    ],[
        'pattern' => 'map',
        'action' => function () {
            return tpl::load(kirby()->roots()->templates().DS.'map.php', [], false);
        }
    ],[
        'pattern' => 'robots.txt',
        'action' => function () {
            return new Response('User-agent: *
Disallow: /www/kirby/
Sitemap: '.url('sitemap.xml'), 'txt');
        }
    ]]
];
