<?php

namespace Acme\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionsController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDefaultBundle:Questions:index.html.twig', array());
    }
    
    public function hotAction()
    {
        return $this->render('AcmeDefaultBundle:Questions:hot.html.twig', array());
    }
}
