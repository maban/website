<?php
snippet('head');

snippet('common/traverse');

snippet('common/header', [
    'pretitle' => 'A descriptive guide to',
    'title' => $page->title(),
    'modifiers' => ['index']
]);

if ($page->text()->isNotEmpty()) {
    snippet('common/page/content', [
        'proseModifiers' => ['centered']
    ]);
}

if (size($page->featured())) {
    snippet('common/section/list', [
        'title' => 'Featured places',
        'items' => $page->featured(),
        'component' => 'common/feature',
        'display' => 'grid'
    ]);
};

if ($page->uid() != 'channel-islands') {
    $items = $page->children();
    if (size($items)) {
        snippet('common/section/list', [
            'title' => $page->listTitle(),
            'items' => $items,
            'display' => 'columns'
        ]);
    }
}

snippet('foot');
