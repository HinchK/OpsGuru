<?php

namespace OpsGuru\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $socialite = $this->app->make('Laravel\Socialite\Contracts\Factory');
        $socialite->extend(
            'foxyapi',
            function ($app) use ($socialite) {
                $config = $app['config']['services.foxyapi'];

                return $socialite->buildProvider(new FoxyApiProvider(), $config);
                // TODO: php 5.4 bandage
                // return $socialite->buildProvider(FoxyApiProvider::class, $config);
            }
        );
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar',
            'OpsGuru\Services\Registrar'
        );
    }
}
