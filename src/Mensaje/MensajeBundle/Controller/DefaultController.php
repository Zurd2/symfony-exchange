<?php

namespace Mensaje\MensajeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MensajeBundle:Default:index.html.twig', array('name' => $name));
    }
}
