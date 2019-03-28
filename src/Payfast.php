<?php


namespace AubreyKodar\Payfast;

use AubreyKodar\Payfast\Constants\Environment;
use AubreyKodar\Payfast\Structures\Merchant;
use AubreyKodar\Payfast\Structures\Routes;

class Payfast
{
    /**
     * @var Merchant
     */
    protected $merchant;

    /**
     * @var Routes
     */
    protected $routes;

    /**
     * @var string
     */
    protected $env;

    /**
     * Payfast constructor.
     * @param string $env
     * @param Merchant|null $merchant
     * @param Routes|null $routes
     */
    public function __construct(string $env = Environment::PRODUCTION, Merchant $merchant = null, Routes $routes = null)
    {
        $this->env = $env;
        $this->merchant = null === $merchant? $this->getMerchant(): $merchant;
        $this->routes = null === $routes? $this->getRoutes(): $routes;
    }

    /**
     * @return Merchant
     */
    private function getMerchant(): Merchant
    {
    }

    /**
     * @return Routes
     */
    private function getRoutes(): Routes
    {
    }
}
