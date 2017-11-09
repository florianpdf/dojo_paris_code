<?php

namespace Dojo\Controllers;

/**
 * Class DefaultController
 * @package Dojo\Controllers
 */
class DefaultController extends Controller
{
	/**
	 * @return string
	 */
	public function indexAction(){
		return $this->twig->render('user/home.html.twig');
	}
}