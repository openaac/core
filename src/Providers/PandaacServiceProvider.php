<?php

namespace pandaac\Core\Providers;

use Illuminate\Support\AggregateServiceProvider;

class PandaacServiceProvider extends AggregateServiceProvider
{
    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        DistributionServiceProvider::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
