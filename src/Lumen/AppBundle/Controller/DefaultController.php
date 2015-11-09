<?php

namespace Lumen\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{
	/**
     * @Route("/" , name="index")
     */
    public function indexAction()
    {
        return $this->render('LumenAppBundle:Default:index.html.twig', array());
    }

    /**
     * @Route("/api/test" , name="tester")
     */
    public function getSecureResourceAction()
    {

//        dump($this->getUser());die;
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw new AccessDeniedException();
        }

        return array('hola' => 'hola');
    }

    /**
     * @Route("/test" ,  name="test")
     */
    public function testAction()
    {
        $clientManager = $this->get('fos_oauth_server.client_manager.default');
        $client = $clientManager->createClient();
        $client->setRedirectUris(array('http://www.example.com'));
        $client->setAllowedGrantTypes(array('token', 'authorization_code'));
//        dump($client);
//        $clientManager->updateClient($client);
        dump($client = $clientManager->findClientBy(array('id' => 1)));
//        dump($client);
        dump($client->getPublicId());
        die('llego');
    }
}