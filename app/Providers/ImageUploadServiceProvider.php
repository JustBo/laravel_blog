<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ImageUploadService;

class ImageUploadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\ImageUploadService', function($app){
          return new ImageUploadService();
        });
    }
}
