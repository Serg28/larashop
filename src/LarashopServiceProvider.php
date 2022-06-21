<?php

namespace Telniy\Larashop;

use Illuminate\Support\ServiceProvider;

class LarashopServiceProvider extends ServiceProvider {

    public function boot() {

    }

    public function register()
    {
        //$this->app->singleton(LarashopService::class, function ($app) { // можно так, по классу

        $this->app->singleton('Larashop', function ($app) {  //можно вместо singleton использовать bind и т.д.
            $larashop = new LarashopService('Larashop is init');
            return $larashop;
        });
    }
}
