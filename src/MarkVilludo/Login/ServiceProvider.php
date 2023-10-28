<?php 

namespace MarkVilludo\ImageUpload;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use MarkVilludo\ImageUpload\ImageUpload;

class ServiceProvider extends BaseServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {      
        if (! class_exists('CreateLoginPage')) {
            // Publish the migration
            $timestamp = date('Y_m_d_His', time());
            $this->publishes([
                __DIR__.'/../resources/views/login.blade.php' => $this->app->resourcePath().'/login.blade.php',
            ], 'migrations');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       
    }

}
