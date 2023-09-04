<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;
use Illuminate\Support\Str;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Get the domain name from the request to use as the path for the views
        // This allows us to have a different set of views for each domain
        $domainName = Str::of(request()->getHost())
            ->explode('.')
            ->first();
        Folio::path(resource_path('views/pages/' . $domainName));
    }
}
