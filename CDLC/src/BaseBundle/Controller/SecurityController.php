<?php

namespace BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/go/home")
     */
    public function redirectAction()
    {
        $authChecker = $this->container->get('security.authorization_checker');

        if ($authChecker->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('store_admin');
        }else if($authChecker->isGranted('ROLE_USER')){
            return $this->redirectToRoute('store_user');
        }else{
            return $this->render('@FOSUser/Security/login.html.twig');
        }
    }

}
