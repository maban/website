<?php
snippet('head');

snippet('common/header', [
    'title' => $title
]);

if (size($results)) {
    snippet('common/section/list', [
        'title' => $results->pagination()->total().' pages found',
        'items' => $results,
        'component' => 'common/result'
    ]);

    if ($results->pagination()->hasPages()) {
        snippet('common/pagination', [
            'pagination' => $results->pagination()
        ]);
    }
} else {
    snippet('common/section/text', [
        'title' => 'No matches found',
        'text' => 'Make sure that all words are spelled correctly, or try using different keywords.'
    ]);
    snippet('common/inquire', [
        'title' => 'Search again'
    ]);
}

snippet('foot');
