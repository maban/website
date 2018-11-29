<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

snippet('common/traverse');

if ($page->stops()->isNotEmpty()) {
    snippet('common/map', [
        'url' => $page->uri().'.geojson/',
        'title' => 'Map of this route',
        'modifiers' => ['cover']
    ]);
}

snippet('common/header', [
    'parent' => $page->operator(),
    'title' => $page->title(),
    'subtitle' => $page->subtitle()->isNotEmpty() ? $page->subtitle() : null
]);

snippet('common/page/content', [
    'proseModifiers' => ['route']
]);

if ($page->links()->isNotEmpty()) {
    snippet('common/section/text', [
        'title' => 'Further reading',
        'text' => $page->links()
    ]);
}

snippet('foot');
