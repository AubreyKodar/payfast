<?php

namespace AubreyKodar\Payfast\Traits;

trait Payfast
{
    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return config('payfast.env');
    }
}