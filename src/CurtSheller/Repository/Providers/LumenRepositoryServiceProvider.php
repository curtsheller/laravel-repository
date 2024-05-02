<?php
namespace CurtSheller\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LumenRepositoryServiceProvider
 * @package CurtSheller\Repository\Providers
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class LumenRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('CurtSheller\Repository\Generators\Commands\RepositoryCommand');
        $this->app->register('CurtSheller\Repository\Providers\EventServiceProvider');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
