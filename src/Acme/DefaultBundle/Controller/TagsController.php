<?php

namespace Acme\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TagsController extends Controller
{
    public function indexAction()
    {

        return $this->render('AcmeDefaultBundle:Tags:index.html.twig', array());
    }
}
