<?php
snippet('head');

snippet('common/header', [
    'title' => 'Stations A-Z',
    'modifiers' => ['index']
]);

$stations = $page->children()->sortBy('title', 'asc');

foreach (alphabetise($stations) as $letter => $items) {
    snippet('common/index', [
        'items' => $items,
        'letter' => $letter,
        'listAs' => 'columns'
    ]);
};

snippet('foot');
