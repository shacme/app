<?php

namespace Acme\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountController extends Controller
{
    public function indexAction()
    {

        $user = $this->getUser();

        return $this->render('AcmeDefaultBundle:Account:index.html.twig', array());
    }
}
