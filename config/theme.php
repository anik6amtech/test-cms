<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Active Theme
    |--------------------------------------------------------------------------
    |
    | It will assign the default active theme to be used if one is not set during
    | runtime.\
    */
    'active' => 'astra',

    /*
    |--------------------------------------------------------------------------
    | Parent Theme
    |--------------------------------------------------------------------------
    |
    | This is a parent theme for the theme specified in the active config
    | option. It works like the WordPress style theme hierarchy, if the blade
    | file is not found in the currently active theme, then it will look for it
    | in the parent theme.
    */
    'parent' => null,

    /*
    |--------------------------------------------------------------------------
    | Base Path
    |--------------------------------------------------------------------------
    |
    | The base path where all the themes are located.
    */
    'base_url' => secure_url('themes/addon'),
    'base_path' => resource_path('views/themes/'),
    'blank_template' => resource_path('views/themes/template.blade.php')
];
