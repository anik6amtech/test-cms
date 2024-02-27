<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Themes\theme;

class ThemeServiceProvider extends ServiceProvider
{
    public function register()
    {
        // $themeConfig = include base_path('themes/theme.php');
        $themeConfig = include base_path('themes/'.config('theme.active').'/setting.php');
        $this->app->instance('theme', $themeConfig);
    }

    public function boot()
    {
        View::share('theme', app('theme'));
    }
}
