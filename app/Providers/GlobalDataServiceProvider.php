<?php

namespace App\Providers;

use App\Models\Categorie;
use Illuminate\Support\ServiceProvider;

class GlobalDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind('categories', function () {
            return Categorie::all();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
