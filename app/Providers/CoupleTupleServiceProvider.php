<?php

namespace App\Providers;

use App\Helper\CoupleTupleHelper;
use Illuminate\Support\ServiceProvider;

class CoupleTupleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ct',function(){
            return new CoupleTupleHelper();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
