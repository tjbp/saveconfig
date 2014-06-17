<?php namespace Tjbp\SaveConfig;

use Illuminate\Support\ServiceProvider;

class SaveConfigServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('config', function($app)
        {
            return new SaveConfig($app->getConfigLoader(), $app->environment());
        });
    }
}
