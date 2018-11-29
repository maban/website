<?php

// Generate `LineString` object for use in GeoJSON
// $pages = Array of StationPages
function generateLineString($pages)
{
    foreach ($pages as $page) {
        if ($page->geolng() && $page->geolat()) {
            $coords[] = [
                $page->geolng()->float(),
                $page->geolat()->float()
            ];
        }
    }

    $lineString = [
        'type' => 'LineString',
        'coordinates' => $coords
    ];

    return $lineString;
}

// Generate `Point` object for use in GeoJSON
// $page = StationPage
function generatePoint($page)
{
    if ($page->geolng()) {
        $point = [
            'type' => 'Point',
            'coordinates' => [
                $page->geolng()->float(),
                $page->geolat()->float()
            ]
        ];

        return $point;
    }
}
