<?php


namespace AubreyKodar\Payfast\Structures;

class BuyerDetails
{
    /**
     * The buyer’s first name.
     *
     * @var string
     */
    public $name_first;

    /**
     * The buyer’s last name.
     *
     * @var string
     */
    public $name_last;

    /**
     * The buyer’s email address
     *
     * @var string
     */
    public $email_address;

    /**
     *  The buyer’s valid cell number
     *
     * @var string
     */
    public $cell_number;

    /**
     * BuyerDetails constructor.
     * @param string $name_first
     * @param string $name_last
     * @param string $email_address
     * @param string $cell_number
     */
    public function __construct(string $name_first, string $name_last, string $email_address, string $cell_number)
    {
        $this->name_first = $name_first;
        $this->name_last = $name_last;
        $this->email_address = $email_address;
        $this->cell_number = $cell_number;
    }
}
