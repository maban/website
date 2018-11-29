<?php
snippet('head');

snippet('common/header', [
    'pretitle' => 'A descriptive guide to places in',
    'title' => 'Great Britain & Ireland',
    'modifiers' => ['index']
]);

foreach (page('places')->children() as $country) {
    snippet('common/section/list', [
        'title' => Html::a($country->url(), smartypants($country->title())),
        'items' => $country->children(),
        'display' => 'columns'
    ]);
}

snippet('foot');
