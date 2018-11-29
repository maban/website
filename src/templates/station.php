<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

snippet('common/header', [
    'parent' => Html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title(),
    'subtitle' => $page->subtitle()
]);

if ($page->place()->isNotEmpty()) {
    snippet('common/feature', [
        'item' => $page->place()->toPage()
    ]);
}

if ($page->routes()) {
    snippet('common/section/route-traversal', [
        'title' => 'Routes serving this station',
        'level' => 3,
        'routes' => $page->routes()
    ]);
}

snippet('common/map', [
    'url' => $page->uri().'.geojson/'.$kirby->request()->url()->params().'&zoom=14',
    'title' => 'Location of this station',
    'modifiers' => ['cover']
]);

snippet('common/section/text', [
    'title' => 'Further reading',
    'text' => $page->links()
]);

snippet('foot');
