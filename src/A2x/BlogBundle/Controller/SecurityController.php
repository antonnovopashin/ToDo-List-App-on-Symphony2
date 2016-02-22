<?php

//namespace AppBundle\Controller;
namespace A2x\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
{
    $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render(
        'security/login.html.twig',
        array(
            // last username entered by the user
            'last_username' => $lastUsername,
            'error'         => $error,
        )
    );
}

  /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
{
    $this->get('security.context')->setToken(null);
    $this->get('request')->getSession()->invalidate();
    return $this->redirect($this->generateUrl('homepage'));
}

}