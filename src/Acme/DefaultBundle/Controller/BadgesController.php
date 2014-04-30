<?php

namespace Acme\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BadgesController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDefaultBundle:Badges:index.html.twig');
    }

}
