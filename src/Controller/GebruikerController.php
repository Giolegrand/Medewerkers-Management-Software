<?php 

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Afdeling;

class GebruikerController extends Controller {
	/**
	 *
	 * @Route("/account", name="account")
	 */
	public function accountAction(Request $r){
		$currentHost = $request->getHttpHost();
	    $baseHost = getenv("base_host");
	    $subdomain = str_replace('.'.$baseHost, '', $currentHost);

	    $em = $this->getDoctrine()->getManager();

	    $firstDomain = $em->getRepository("App:Afdeling")->findByActive(true)[0];

	    $afdeling = $em->getRepository("App:Afdeling")->findOneByFrontName($subdomain);

	    if($subdomain == $baseHost||null == $afdeling)
	    	return $this->redirect("https://{$firstDomain->getFrontName()}.{$baseHost}");

	    

        $afdelingen = $em->getRepository("App:Afdeling")->findByActive(true);

        return $this->render("Admin:accoun.html.twig", [
            'afdelingen' => $afdelingen,
            'content' => $content,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            "host" => $baseHost,
        ]);
	}
}