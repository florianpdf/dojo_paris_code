<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 11/12/17
 * Time: 16:55
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Samaritaine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SamaritaineController extends Controller
{
	/**
	 * @Route("/", name="blog_home")
	 */
	public function displayAction(){
		$em = $this->getDoctrine()->getManager();
		$samaritaines = $em->getRepository(Samaritaine::class)->findAll();
		return $this->render('default/home.html.twig', array(
			"samaritaines" => $samaritaines
		));
	}
}

