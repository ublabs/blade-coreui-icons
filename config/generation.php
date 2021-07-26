<?php

use Illuminate\Support\Str;

$svgNormalization = static function (string $tempFilepath, array $iconSet) {
    $fileLines = file_get_contents($tempFilepath);
    $updated = Str::replace('<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"', '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"', $fileLines);
    file_put_contents($tempFilepath, $updated);
};

return [
    [
        'source' => __DIR__.'/../dist/svg/brand',
        'destination' => __DIR__.'/../resources/svg/brand',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/flag',
        'destination' => __DIR__.'/../resources/svg/flag',
        'after' => $svgNormalization,
        'safe' => true,
    ],
    [
        'source' => __DIR__.'/../dist/svg/free',
        'destination' => __DIR__.'/../resources/svg/free',
        'after' => $svgNormalization,
        'safe' => true,
    ],
];
