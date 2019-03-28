<?php

namespace AubreyKodar\Payfast\Exceptions;

class ConfigNotFoundException extends \Exception
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
    }
}
