<?php

namespace AubreyKodar\Payfast;

use AubreyKodar\Payfast\Structures\BuyerDetails;
use AubreyKodar\Payfast\Traits\Payfast as PayfastTrait;
use AubreyKodar\Payfast\Structures\TransactionDetails;
use AubreyKodar\Payfast\Structures\TransactionOptions;
use AubreyKodar\Payfast\Structures\RecurringBillingDetails;

class PayfastFormBuilder extends Payfast
{
    use PayfastTrait;

    /**
     * PayfastFormBuilder constructor.
     * @throws Exceptions\ConfigNotFoundException
     */
    public function __construct()
    {
        parent::__construct($this->getEnvironment());
    }

    /**
     * @param BuyerDetails|null $buyerDetails
     * @param TransactionDetails|null $transactionDetails
     * @param RecurringBillingDetails|null $recurringBillingDetails
     * @param TransactionOptions|null $options
     * @return string
     */
    public function build(
        BuyerDetails $buyerDetails = null,
        TransactionDetails $transactionDetails = null,
        RecurringBillingDetails $recurringBillingDetails = null,
        TransactionOptions $options = null
    ) {
        $formStructures = [
            $this->merchant,
            $this->routes,
            $buyerDetails,
            $transactionDetails,
            $recurringBillingDetails,
            $options
        ];

        return '<form action="'.$this->getUrl().'" method="POST">'
                .$this->render($formStructures)
                .'<input type="submit"></form>';
    }

    /**
     * @param array $structures
     * @return string
     */
    private function render(Array $structures) : string
    {
        $output = '';

        foreach ($structures as $structure) {
            $elements = (Array) $structure;
            foreach ($elements as $name => $value) {
                if (null !== $value) {
                    $output = $output.'<input type="hidden" name="'.$name.'" value="'.$value.'">';
                }
            }
        }

        return $output;
    }
}
