<?php

// Generate `LineString` object for use in GeoJSON
// $pages = Array of StationPages
function generateLineString($pages)
{
    foreach ($pages as $page) {
        if ($location = $page->location()->toLocation()) {
            $coords[] = [
                $location->lon()->float(),
                $location->lat()->float()
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
    if ($location = $page->location()->toLocation()) {
        $point = [
            'type' => 'Point',
            'coordinates' => [
                $location->lon()->float(),
                $location->lat()->float()
            ]
        ];

        return $point;
    }
}
