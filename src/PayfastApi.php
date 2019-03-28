<?php


namespace AubreyKodar\Payfast;

class PayfastApi extends Payfast
{
    public function ping()
    {
        dump($this->get('subscription'));
    }
}
