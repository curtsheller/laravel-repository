<?php
namespace CurtSheller\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class RepositoryServiceProvider
 * @package CurtSheller\Repository\Providers
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../../resources/config/repository.php' => config_path('repository.php')
        ]);

        $this->mergeConfigFrom(__DIR__ . '/../../../resources/config/repository.php', 'repository');

        $this->loadTranslationsFrom(__DIR__ . '/../../../resources/lang', 'repository');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('CurtSheller\Repository\Generators\Commands\RepositoryCommand');
        $this->commands('CurtSheller\Repository\Generators\Commands\TransformerCommand');
        $this->commands('CurtSheller\Repository\Generators\Commands\PresenterCommand');
        $this->commands('CurtSheller\Repository\Generators\Commands\EntityCommand');
        $this->commands('CurtSheller\Repository\Generators\Commands\ValidatorCommand');
        $this->commands('CurtSheller\Repository\Generators\Commands\ControllerCommand');
        $this->commands('CurtSheller\Repository\Generators\Commands\BindingsCommand');
        $this->commands('CurtSheller\Repository\Generators\Commands\CriteriaCommand');
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
