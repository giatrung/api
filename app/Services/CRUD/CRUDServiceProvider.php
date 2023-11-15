<?php

namespace App\Services\CRUD;

use Illuminate\Support\ServiceProvider;

class CRUDServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('crud', function() {
            return new \App\Services\CRUD\BasicCRUD;
        });
    }
}
