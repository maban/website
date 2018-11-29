<?php
snippet('head');

snippet('common/inquire', [
    'title' => 'Search '.site()->title(),
    'modifiers' => ['home']
]);

snippet('common/header', [
    'level' => 2,
    'title' => Html::a(page('routes')->url(), 'Routes & Tours'),
    'subtitle' => '(In four sections), adapted to the railway system:',
    'modifiers' => ['index']
]);

snippet('common/page/content');

snippet('common/section/places', [
    'modifiers' => ['offset']
]);

snippet('foot');
