<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Minutes to cache
    |--------------------------------------------------------------------------
    |
    | The selection of minutes text can be cached for
    |
    */

    'minutes' => [
        '30' => '30 minutes',
        '60' => '1 hour',
        '720' => '12 hours',
        '1440' => '1 day',
        '10080' => '1 week',
        '43200' => '1 month'
    //     '30'     => __('vault.form.minutes', ['minutes' => 30]),
    //     '60'     => __('vault.form.hour', ['hour' => 1]),
    //     '720'    => __('vault.form.hours', ['hours' => 12]),
    //     '1440'   => __('vault.form.hours', ['hours' => 24]),
    //     '2880'   => __('vault.form.hours', ['hours' => 48]),
    //     '10080'  => __('vault.form.days', ['days' => 7]),
    //     '20160'  => __('vault.form.days', ['days' => 14]),
    //     '43200'  => __('vault.form.days', ['days' => 30]),
    ],

    /*
    |--------------------------------------------------------------------------
    | Max text size (in bytes)
    |--------------------------------------------------------------------------
    |
    | Don't allow text larger than this. Note, this limit is checked after the text
    | has been encrypted and base 64 encoded client side which means isn't
    | significantly larger than the original text entered by the user.12
    |
    */

    'max_size' => 32000,

    /*
    |--------------------------------------------------------------------------
    | Google Analytics ID
    |--------------------------------------------------------------------------
    |
    | Enter your Google Analytics ID in "UA-XXXXXX" format for tracking
    */

    'google_analytics' => false,
];
