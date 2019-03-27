<?php


namespace AubreyKodar\Payfast\Structures;

class TransactionDetails
{
    /**
     * Unique payment ID on the merchant’s system
     *
     * @var string
     */
    public $m_payment_id;

    /**
     * The amount which the payer must pay in ZAR.
     *
     * @var float
     */
    public $amount;

    /**
     * The name of the item being charged for.
     *
     * @var string
     */
    public $item_name;

    /**
     * The description of the item being charged for.
     *
     * @var string
     */
    public $item_description;

    /**
     * A series of 5 custom integer variables
     *
     * @var string
     */
    public $custom_int1;

    /**
     * A series of 5 custom string variables
     *
     * @var string
     */
    public $custom_str1;

    /**
     * TransactionDetails constructor.
     * @param string $m_payment_id
     * @param string $amount
     * @param string $item_name
     * @param string $item_description
     * @param string $custom_int1
     * @param string $custom_str1
     */
    public function __construct(
        string $m_payment_id,
        string $amount,
        string $item_name,
        string $item_description,
        string $custom_int1 = null,
        string $custom_str1 = null
    ) {
        $this->m_payment_id = $m_payment_id;
        $this->amount = $amount;
        $this->item_name = $item_name;
        $this->item_description = $item_description;
        $this->custom_int1 = $custom_int1;
        $this->custom_str1 = $custom_str1;
    }
}
