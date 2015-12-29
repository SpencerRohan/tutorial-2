<?php

namespace App\Providers;
use Blade;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProductRepository;
use App\Repositories\VendorRepository;
use App\Product;
use App\Vendor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::extend(function($value) {
            return preg_replace('/\@var(.+)/', '<?php ${1}; ?>', $value);
        });

        $this->app->bind('App\Contracts\ProductContract', function($app) {
            return new ProductRepository(new Product); 
        });

        $this->app->bind('App\Repositories\VendorRepository', function($app) {
            return new VendorRepository(new Vendor); 
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
