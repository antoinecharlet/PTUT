<?php

namespace HelloWordBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HelloWordBundle:Default:index.html.twig');
    }
}
