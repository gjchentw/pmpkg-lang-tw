<?php
namespace ProcessMaker\Package\Translations;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{

    // Assign the default namespace for our controllers
    protected $namespace = '\ProcessMaker\Package\Translations\Http\Controllers';

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
    }
}
