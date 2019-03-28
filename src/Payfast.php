<?php

namespace AubreyKodar\Payfast;

use AubreyKodar\Payfast\Structures\Routes;
use AubreyKodar\Payfast\Structures\Merchant;
use AubreyKodar\Payfast\Constants\Environment;
use AubreyKodar\Payfast\Exceptions\ConfigNotFoundException;
use Carbon\Carbon;
use GuzzleHttp\Client as HttpClient;

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
     * @var GuzzleHttp Client
     */
    private $httpClient;

    /**
     *@constant URL
     */
    private const URL = [
        'local'=>'https://sandbox.payfast.co.za/eng/process',
        'production'=>'https://api.payfast.co.za'
    ];

    /**
     * Payfast constructor.
     * @param string $env
     * @param Merchant|null $merchant
     * @param Routes|null $routes
     * @throws ConfigNotFoundException
     */
    public function __construct(string $env = Environment::PRODUCTION, Merchant $merchant = null, Routes $routes = null)
    {
        $this->env = $env;
        $this->merchant = null === $merchant? $this->getMerchant(): $merchant;
        $this->routes = null === $routes? $this->getRoutes(): $routes;

        $this->httpClient = new HttpClient();
    }

    /**
     * @return Merchant
     * @throws ConfigNotFoundException
     */
    private function getMerchant(): Merchant
    {
        if (strlen(config('payfast.merchant_id')) === 0
            || strlen(config('payfast.merchant_key') ===0)
        ) {
            throw new ConfigNotFoundException();
        }

        return new Merchant(config('payfast.merchant_id'), config('payfast.merchant_key'));
    }

    /**
     * @return Routes
     */
    private function getRoutes(): Routes
    {
        return new Routes(
            config('payfast.notify_url'),
            config('payfast.return_url'),
            config('payfast.cancel_url')
        );
    }

    /**
     * @param string $resource
     * @return string
     */
    private function urlBuilder(string $resource): string
    {
        return Payfast::URL[config('payfast.env', Environment::PRODUCTION)].'/'.$resource;
    }
    protected function getUrl()
    {
        return$this->urlBuilder('');
    }
    protected function get($resource)
    {
        return ;

        return $this->httpClient->request('GET', $this->urlBuilder($resource), $this->getHeaders());
    }
    protected function post()
    {
    }
    protected function put()
    {
    }
    public function getHeaders()
    {
        return [
            'Accept'=>'application/json',
            'merchant-id'=> $this->merchant->merchant_id,
            'version'=>'v1',
            'timestamp'=>$this->getTimeStamp(),
            'signature'=>''
        ];
    }
    public function getTimeStamp(): string
    {
        return Carbon::now()->format('Y-m-d H:i');
    }
    public function getMD5()
    {
    }

    //amount=60&cycles=0&frequency=3&item_description=Hosting&item_name=Website+hosting&merchant-id=10012195&passphrase=AubreyIsKing12nowimpissed&timestamp=2019-03-28+20%3A12&version=v1
}
