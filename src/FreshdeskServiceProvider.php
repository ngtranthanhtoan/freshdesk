<?php namespace Hapiwork\Freshdesk;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;


class FreshdeskServiceProvider extends ServiceProvider {
    
    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }


    public function register()
    {
        $this->registerResources();
        
        $this->registerRoutes();

    }

    public function registerResources() {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadViewsFrom(__DIR__. '/../resources/views', 'hapiwork-freshdesk');
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing() {
        $this->publishes([
            __DIR__.'/../config/hapiwork-freshdesk.php' => config_path('hapiwork-freshdesk.php'),
        ], 'hapiwork-freshdesk');
    }


    protected function registerRoutes() {
        Route::group($this->routeConfiguration(), function() {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration() {
        return [
            'namespace' => 'Hapiwork\Freshdesk\Http\Controllers',
            //'middleware' => 'auth'
        ];
    }



}