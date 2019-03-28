<?php

namespace AubreyKodar\Payfast\Structures;

class Merchant
{
    /**
     * @var string Merchant Id
     */
    public $merchant_id;

    /**
     * @var string Merchant Key
     */
    public $merchant_key;

    /**
     * Merchant constructor.
     * @param string $merchant_id
     * @param string $merchant_key
     */
    public function __construct(string $merchant_id, string $merchant_key)
    {
        $this->merchant_id = $merchant_id;
        $this->merchant_key = $merchant_key;
    }
}
