<?php

namespace Acme\DevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeDevBundle:Default:index.html.twig', array('name' => $name));
    }
}
