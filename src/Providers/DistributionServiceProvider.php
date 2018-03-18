<?php

namespace pandaac\Core\Providers;

use Illuminate\Support\ServiceProvider;

class DistributionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('distribution', $this->app['config']->get('distro.provider'));

        $implementations = $this->app['distribution']->implementations();

        foreach ($implementations as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
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
