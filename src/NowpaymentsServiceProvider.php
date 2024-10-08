<?php

namespace PrevailExcel\Nowpayments;


use Illuminate\Support\ServiceProvider;

/*
 * This file is part of the Laravel NOWPayments package.
 *
 * (c) Prevail Ejimadu <prevailexcellent@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class NowpaymentsServiceProvider extends ServiceProvider
{

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Publishes all the config file this package needs to function
    */
    public function boot()
    {
    }

    /**
    * Register the application services.
    */
    public function register()
    {
        $this->app->bind('laravel-nowpayments', function () {
            return new Nowpayments;
        });
    }

    
    /**
     * Register the dashboard components.
     *
     * @return void
     */
    /**
     * Register the dashboard gate.
     *
     * @return void
     */
   

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['laravel-nowpayments'];
    }
}