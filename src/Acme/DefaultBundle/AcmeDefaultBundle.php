<?php

namespace Acme\DefaultBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeDefaultBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
