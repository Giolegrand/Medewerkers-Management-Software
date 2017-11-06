<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthenticationController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        $afdelingen = $this->getDoctrine()->getRepository("App:Afdeling")->findByActive(true);
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastEmail = $authUtils->getLastUsername();
        return $this->render('App:Authentication:login.html.twig', array(
            'last_email' => $lastEmail,
            'error' => $error,
            'afdelingen' => $afdelingen,
        ));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
    }

    /**
     * @Route("/forgotPassword", name="wwVergeten")
     */
    public function wachtwoordVergetenAction(UserPasswordEncoderInterface $encoder)
    {
        $user = new \App\Entity\Medewerker();
        $pass = $encoder->encodePassword($user, "test123");

        return $this->render('App:Authentication:wachtwoord_vergeten.html.twig', array(
            "pass" => $pass,
        ));
    }

}
