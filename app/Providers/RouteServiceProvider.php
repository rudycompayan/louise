<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdministratorRoutes();

        $this->mapManagerRoutes();

        $this->mapRegisteredRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace'  => $this->namespace,
            'prefix'     => 'api',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }

    /**
     * Define routes for administrators pages
     */
    protected function mapAdministratorRoutes()
    {
        Route::group([
            'middleware' => [
                'web',
                'auth.pals:administrator'
            ],
            'namespace'  => $this->namespace,
            'prefix'     => 'administrator'
        ], function ($router) {
            require base_path('routes/administrator.php');
        });
    }

    /**
     * Define routes for managers pages
     */
    protected function mapManagerRoutes()
    {
        Route::group([
            'middleware' => [
                'web',
                'auth.pals:manager'
            ],
            'namespace'  => $this->namespace,
            'prefix'     => 'manager'
        ], function ($router) {
            require base_path('routes/manager.php');
        });
    }
    
    /**
     * Define routes for registered pages
     */
    protected function mapRegisteredRoutes()
    {
        Route::group([
            'middleware' => [
                'web',
                'auth.pals:registered'
            ],
            'namespace'  => $this->namespace,
            'prefix'     => 'home'
        ], function ($router) {
            require base_path('routes/registered.php');
        });
    }
}
