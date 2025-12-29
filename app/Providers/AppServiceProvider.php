<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Job;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        // this wont work because twitter bootstrap is not loaded, so css for that will fail
        // but this is how you can plug different UI styles for the paginator.
        // Paginator::useBootstrap() 

        // this option could be used to plug in your own pagination
        // Paginator::defaultView('...')
    }
}
