<?php

namespace baseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('baseBundle:Default:index.html.twig');
    }
}
