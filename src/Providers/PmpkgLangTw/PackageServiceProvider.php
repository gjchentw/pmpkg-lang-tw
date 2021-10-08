<?php
namespace ProcessMaker\Package\PmpkgLangTw;

use Illuminate\Support\ServiceProvider;
use ProcessMaker\Traits\PluginServiceProviderTrait;

class PackageServiceProvider extends ServiceProvider
{
    use PluginServiceProviderTrait;

    const name = "Language Package (TW)"
    const version = "0.0.8"

    /**
     * If your plugin will provide any services, you can register them here.
     * See: https://laravel.com/docs/5.6/providers#the-register-method
     */
    public function register()
    {
        // Nothing is registered at this time
    }

    /**
     * After all service provider's register methods have been called, your boot method
     * will be called. You can perform any initialization code that is dependent on
     * other service providers at this time.  We've included some example behavior
     * to get you started.
     *
     * See: https://laravel.com/docs/5.6/providers#the-boot-method
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../../resources/lang' => resource_path('lang'),
        ], 'pmpkg-lang-tw');

        $packageLanguage = app()->make('ProcessMaker\Package\PackageLanguage');
        $packageLanguage->registerPath(__DIR__.'/../../../resources/lang');

        $this->completePluginBoot();
    }
}
