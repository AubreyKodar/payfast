<?php

namespace AubreyKodar\Payfast\Structures;

class Routes
{
    /**
     * Success URL
     *
     * @var string
     */
    public $return_url;

    /**
     * Cancel URL
     *
     * @var string
     */
    public $cancel_url;

    /**
     * Notify URL
     *
     * @var string
     */
    public $notify_url;

    /**
     * Routes constructor.
     * @param string $notify_url
     * @param string $return_url
     * @param string $cancel_url
     */
    public function __construct(string $notify_url, string  $return_url, string $cancel_url)
    {
        $this->notify_url = $notify_url;
        $this->return_url = $return_url;
        $this->cancel_url = $cancel_url;
    }
}
