<?php

namespace AubreyKodar\Payfast;

use AubreyKodar\Payfast\PayfastApi;
use Illuminate\Support\ServiceProvider;
use AubreyKodar\Payfast\Facades\PayfastForm;
use AubreyKodar\Payfast\Facades\PayfastAPI as PayfastAPIFacade;

class PayfastServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }
    public function register()
    {
        $this->registerAliases();
        $this->registerFormBuilder();
        $this->registerAPI();

        $this->mergeConfigFrom(
            __DIR__.'/../config/payfast.php',
            'payfast'
        );
    }

    /**
     * Register bindings for aliases.
     *
     * @return void
     */
    public function registerAliases()
    {
        $this->app->alias('aubreykodar.payfast.form', PayfastForm::class);
        $this->app->alias('aubreykodar.payfast.api', PayfastAPIFacade::class);
    }

    /**
     * Register binding for form builder.
     *
     * @return void
     */
    public function registerFormBuilder()
    {
        $this->app->singleton('aubreykodar.payfast.form', function () {
            return new PayfastFormBuilder();
        });
    }

    /**
     * Register binding for form API.
     *
     * @return void
     */
    public function registerAPI()
    {
        $this->app->singleton('aubreykodar.payfast.api', function () {
            return new PayfastApi();
        });
    }
    /**
     * Helper to get the config values.
     *
     * @param  string  $key
     * @param  string  $default
     *
     * @return mixed
     */
    protected function config($key, $default = null)
    {
        return config("payfast.$key", $default);
    }
}
