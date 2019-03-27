<?php


namespace AubreyKodar\Payfast\Structures;


class MerchantDetails
{
    /**
     * Merchant ID
     *
     * @var integer
     */
    public $merchant_id;

    /**
     * Merchant Key
     *
     * @var string
     */
    public $merchant_key;

    /**
     * The URL where the user is returned to after payment has been successfully taken.
     *
     * @var string
     */
    public $return_url;

    /**
     * The URL where the user should be redirected should they choose to cancel their payment
     *
     * @var string
     */
    public $cancel_url;

    /**
     * The URL which is used by PayFast to post the ITN
     *
     * @var string
     */
    public $notify_url;

    /**
     * MerchantDetails constructor.
     * @param int $merchantId
     * @param string $merchantKey
     * @param string $returnUrl
     * @param string $cancelUrl
     * @param string $notifyUrl
     */
    public function __construct(int $merchantId, string $merchantKey, string $returnUrl, string $cancelUrl, string $notifyUrl)
    {
        $this->merchant_id = $merchantId;
        $this->merchant_key = $merchantKey;
        $this->return_url = $returnUrl;
        $this->cancel_url = $cancelUrl;
        $this->notify_url = $notifyUrl;
    }
}