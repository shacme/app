<?php

namespace Acme\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $csrfToken = $this->container->has('form.csrf_provider') ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate') : null;

        return $this->render('AcmeDefaultBundle:Default:index.html.twig', array('csrf_token' => $csrfToken,));
    }

    public function helloAction()
    {

        return $this->render('AcmeDefaultBundle:Default:index.html.twig', array());
    }
}
