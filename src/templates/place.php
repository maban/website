<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

snippet('common/header', [
    'parent' => Html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title(),
    'subtitle' => $page->subtitle()
]);

if ($image = $page->image('cover.jpg')) {
    snippet('common/figure/cover', [
        'image' => $image
    ]);
}

snippet('common/page/content');

// if (size($page->nearby()) {
//     snippet('common/section/list', [
//         'title' => 'Places nearby',
//         'modifiers' => ['offset'],
//         'items' => $page->nearby(),
//         'component' => 'common/feature',
//         'display' => 'grid'
//     ]);
// }

snippet('foot');
