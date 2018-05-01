<?php

namespace App\Providers;

use App\Billing\Stripe;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // Only loaded when requested.  Cannot use with boot
    // protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // new @if directive   @guest
        // \Blade::if('guest', function ($param) {
        //     return auth()->guest();
        // });

        view()->composer('partials.sidebar', function ($view) {
            $view->with('archives', \App\Event::getArchive());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Service Container Binding
        $this->app->singleton(Stripe::class, function ($app) {
            // $this->app->make('');
            return new Stripe(config('services.stripe.secret'));
        });

        // \App::bind('App\Billing\Stripe', function() {});
    }
}
