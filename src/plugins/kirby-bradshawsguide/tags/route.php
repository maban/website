<?php

return [
    'html' => function ($tag) {
        if ($route = page('routes/'.$tag->value())) {
            return snippet('common/route', [
                'route' => $route
            ], true);
        }
    }
];
