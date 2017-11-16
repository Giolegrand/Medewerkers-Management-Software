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
        $currentHost = $request->getHttpHost();
        $baseHost = getenv("base_host");
        $subdomain = str_replace('.'.$baseHost, '', $currentHost);

        $em = $this->getDoctrine()->getManager();

        $firstDomain = $em->getRepository("App:Afdeling")->findByActive(true)[0];

        $afdeling = $em->getRepository("App:Afdeling")->findOneByFrontName($subdomain);

        if($subdomain == $baseHost||null == $afdeling)
            return $this->redirect("https://{$firstDomain->getFrontName()}.{$baseHost}");

        dump($this->container->get('session'));

        $afdelingen = $em->getRepository("App:Afdeling")->findByActive(true);
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastEmail = $authUtils->getLastUsername();
        return $this->render('Authentication/login.html.twig', array(
            'last_email' => $lastEmail,
            'error' => $error,
            'afdelingen' => $afdelingen,
            "afdeling" => $subdomain,
            "host" => $baseHost,
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
    public function wachtwoordVergetenAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $currentHost = $request->getHttpHost();
        $baseHost = getenv("base_host");
        $subdomain = str_replace('.'.$baseHost, '', $currentHost);

        $em = $this->getDoctrine()->getManager();

        $firstDomain = $em->getRepository("App:Afdeling")->findByActive(true)[0];

        $afdeling = $em->getRepository("App:Afdeling")->findOneByFrontName($subdomain);

        if($subdomain == $baseHost||null == $afdeling)
            return $this->redirect("https://{$firstDomain->getFrontName()}.{$baseHost}");

        $afdelingen = $em->getRepository("App:Afdeling")->findByActive(true);


        return $this->render('Authentication/wachtwoord_vergeten.html.twig', array(
            'afdelingen' => $afdelingen,
            "afdeling" => $subdomain,
            "host" => $baseHost,
        ));
    }

}
