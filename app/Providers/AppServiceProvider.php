<?php

namespace App\Providers;

use App\Models\message;
use App\Observers\MessageObserver;
use Illuminate\Support\ServiceProvider;

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
        message::observe(MessageObserver::class);
    }
}
