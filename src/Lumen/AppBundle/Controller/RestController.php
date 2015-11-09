<?php 
namespace Lumen\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\UserBundle\Model\UserInterface;

class RestController 
{
	/**
     * @Rest\Get("/get/algo", name="get_algo")
     * @Rest\View()
     */
    public function getAlgoAction(Request $request)
    {

        return array('test' => 'test');
    }

	
}