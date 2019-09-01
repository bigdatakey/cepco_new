<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Manufacturer;
use App\Sheet;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $manufacturers = Manufacturer::limit(16)->get();

        $index_devices = Sheet::where('page_type', '=', 1)->limit(16)->get();

        view()->share('manufacturers', $manufacturers);
        view()->share('index_devices', $index_devices);
    }
}
