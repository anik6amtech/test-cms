<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Themes\theme;
use TorMorten\Eventy\Facades\Eventy;

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

        Eventy::addFilter('blogs', function($limit) {
            return Blog::all()->take($limit);
           });

           Eventy::addFilter('menues', function($limit) {
            return Page::all();
           });
        View::share('theme', app('theme'));
    }
}
