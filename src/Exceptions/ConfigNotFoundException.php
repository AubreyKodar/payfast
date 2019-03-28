<?php

namespace AubreyKodar\Payfast\Exceptions;

class ConfigNotFoundException extends \Exception
{
    public function __construct(Exception $previous = null)
    {
        parent::__construct("Merchant configurations not found", 404, $previous);
    }
}
