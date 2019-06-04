<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $models=array('Subject','Major');
        foreach ($models as $model) {
           $this->app->bind("App\Repositories\Interfaces\\{$model}Interface", "App\Repositories\Model\\{$model}Model");
        }
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
