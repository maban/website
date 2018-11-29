<?php

return [
    'html' => function($tag) {
        $text = $tag->value();
        $text = urldecode($text);
        $text = str_replace('_', ' ', $text);

        return Html::tag('a', $text.' on Wikipedia', [
            'href' => 'https://en.wikipedia.org/wiki/'.$tag->value()
        ]);
    }
];
