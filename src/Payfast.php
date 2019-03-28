<?php


namespace AubreyKodar\Payfast;

use AubreyKodar\Payfast\Constants\Environment;
use AubreyKodar\Payfast\Structures\Merchant;
use AubreyKodar\Payfast\Structures\Routes;

class Payfast
{
    /**
     * Payfast constructor.
     *     'merchant_id'=>'',
    'merchant_key'=>'',
    'env'=>'',
    'return_url'=>'',
    'cancel_url'=>'',
    'notify_url'=>''
     */

    protected $merchant;
    protected $routes;
    protected $env;

    public function __construct(string $env = Environment::PRODUCTION, Merchant $merchant = null, Routes $routes = null)
    {
        $this->env = $env;
        $this->merchant = null === $merchant? $this->getMerchant(): $merchant;
        $this->routes = null === $routes? $this->getRoutes(): $routes;
    }
    private function getMerchant(): Merchant
    {
    }
    private function getRoutes(): Routes
    {
    }
}
