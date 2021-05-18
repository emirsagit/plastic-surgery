<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\ServicesComposer;

class ComposerServiceProvider extends ServiceProvider
{
   /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ServicesComposer::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', ServicesComposer::class);
    }
}
