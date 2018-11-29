<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

snippet('common/header', [
    'parent' => Html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title()
]);

snippet('common/page/content');

snippet('common/section/list', [
    'title' => 'Routes operated',
    'items' => $page->routes(),
    'component' => 'common/route-item'
]);

snippet('common/map', [
    'url' => $page->uri().'.geojson',
    'title' => 'Network map',
    'modifiers' => ['cover']
]);

snippet('common/section/list', [
    'title' => 'All stations',
    'items' => $page->stations(),
    'display' => 'columns'
]);

snippet('common/section/text', [
    'title' => 'Further reading',
    'text' => '(wikipedia: '.urlencode($page->wikipedia()).')'
]);

snippet('foot');
