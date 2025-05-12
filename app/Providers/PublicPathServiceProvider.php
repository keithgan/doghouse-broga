<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PublicPathServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('path.public', fn () => base_path('public_html'));
    }
}
