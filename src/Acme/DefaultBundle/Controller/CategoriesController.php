<?php

namespace Acme\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function indexAction()
    {

        return $this->render('AcmeDefaultBundle:Categories:index.html.twig', array());
    }
}
