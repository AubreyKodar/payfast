<?php

namespace AubreyKodar\Payfast\Structures;

class TransactionOptions
{
    /**
     * @var bool
     */
    public $email_confirmation;

    /**
     * The address to send the confirmation email to.
     *
     * @var string
     */
    public $confirmation_address;

    /**
     * TransactionOptions constructor.
     * @param bool $email_confirmation
     * @param string $confirmation_address
     */
    public function __construct(bool $email_confirmation, string $confirmation_address)
    {
        $this->email_confirmation = $email_confirmation;
        $this->confirmation_address = $confirmation_address;
    }
}
