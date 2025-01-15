<?php

namespace Toluwani\BlogToolkits;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Toluwani\BlogToolkits\Http\Middleware\RequestLoggerMiddleware;

class BlogToolKitServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //1.Routes :Register your route
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        //2.View: Register and Load package Views
        $this->loadViewsFrom(__DIR__.'/views', 'blog');
        //3.Migrations: This
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        //4. Publish Package assets
        $this->publishes([__DIR__.'/public' => public_path('blog')], 'public');
        //5. Register your config file and publish the file
        $this->mergeConfigFrom(__DIR__.'/config/blog.php', 'blog');
        $this->publishes([__DIR__.'/config/blog.php' => config_path('blog.php')], 'config');


        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('request_logger', RequestLoggerMiddleware::class);

    }


    public function register()
    {

    }

}
