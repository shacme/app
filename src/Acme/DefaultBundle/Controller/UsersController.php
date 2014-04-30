<?php

namespace Acme\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    public function indexAction()
    {

        return $this->render('AcmeDefaultBundle:Users:index.html.twig', array());
    }
}
