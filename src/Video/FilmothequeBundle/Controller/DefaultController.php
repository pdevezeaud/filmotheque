<?php

namespace Video\FilmothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VideoFilmothequeBundle:Default:index.html.twig');
    }
}
