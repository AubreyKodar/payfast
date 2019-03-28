<?php

namespace AubreyKodar\Payfast\Facades;

use Illuminate\Support\Facades\Facade;

class PayfastAPI extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return 'aubreykodar.payfast.api';
    }
}