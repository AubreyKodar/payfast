<?php

namespace AubreyKodar\Payfast\Facades;

use Illuminate\Support\Facades\Facade;

class PayfastForm extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return 'aubreykodar.payfast.form';
    }
}
