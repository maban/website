<?php

// Redirect
$view = (get('view') == true) ? get('view') : 'list';
$section = $pages->find('sections')->children()->findById(param('section'));

if (param('section') == null) {
    go($page->uri().'/section:1?view='.$view);
};

if (get('view') == null) {
    go($page->uri().'/section:'.param('section').'?view=list');
};

// Page content
snippet('head', [
    'alternate' => $page->url().'.geojson'.'/section:'.param('section')
]);

snippet('common/header', [
    'title' => $page->title(),
    'modifiers' => ['index']
]);

snippet('common/tablist', [
    'title' => 'Sections',
    'paramName' => 'section',
    'currentURL' => '/routes/section:'.param('section'),
    'tabs' => $site->find('sections')->children()
]);

snippet('common/page/content', [
    'content' => $section->text(),
    'proseModifiers' => ['centered'],
    'editable' => false
]);

if (size($routes)) {
    snippet('common/switch', [
        'title' => 'Change view',
        'queryName' => 'view',
        'switches' => [[
            'label' => 'List view',
            'uid' => 'list'
        ],[
            'label' => 'Map view',
            'uid' => 'map'
        ]]
    ]);

    if (get('view') == 'map') {
        snippet('common/map', [
            'url' => $page->uri().'.geojson/'.$kirby->request()->url()->params(),
            'title' => 'Routes plotted on a map',
            'modifiers' => ['cover']
        ]);
    } else {
        snippet('common/section/list', [
            'title' => 'Featured routes',
            'items' => $featured->filterBy('section', param('section')),
            'component' => 'common/feature',
            'display' => 'grid'
        ]);

        foreach ($companies as $company) {
            $items = $company->routes()->filterBy('section', param('section'));

            if (size($items)) {
                snippet('common/section/list', [
                    'title' => Html::a($company->url(), $company->title()),
                    'items' => $items,
                    'component' => 'common/route-item'
                ]);
            }
        }
    }
}

snippet('foot');
