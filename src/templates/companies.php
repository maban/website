<?php
snippet('head');

snippet('common/header', [
    'title' => $page->title(),
    'modifiers' => ['index']
]);

$companies = $page->children()->sortBy('title', 'asc');

foreach (alphabetise($companies) as $letter => $items) {
    snippet('common/index', [
        'items' => $items,
        'letter' => $letter
    ]);
};

snippet('foot');
