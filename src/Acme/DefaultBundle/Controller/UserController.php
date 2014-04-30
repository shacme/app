<?php

namespace Acme\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {


        return $this->render('AcmeDefaultBundle:User:index.html.twig', array());

    }
}
