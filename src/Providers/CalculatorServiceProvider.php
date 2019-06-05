<?php

namespace Linhchan\Calculator\Providers;

use Illuminate\Support\ServiceProvider;
use Linhchan\Calculator\CalculatorController;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(CalculatorController::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include dirname(__DIR__, 1).'/Routes/web.php';
    }
}
