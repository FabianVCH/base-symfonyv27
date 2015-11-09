<?php

namespace Lumen\KoometaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LumenKoometaBundle:Default:index.html.twig', array('name' => $name));
    }
}
