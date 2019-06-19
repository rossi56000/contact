<?php
namespace Rossi56000\Contact;


use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{



    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php',
            'contact'
        );

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/views' => resource_path('views/vendor/contact'),
        ]);
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
