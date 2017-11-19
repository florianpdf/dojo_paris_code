<?php

namespace MyApp\Controllers;

use MyApp\Model\Entity\User;
use MyApp\Model\Repository\UserManager;

/**
 * Class DefaultController
 * @package MyApp\Controllers
 */
class UserController extends Controller
{
	/**
	 * List all user
	 * @return string
	 */
	public function indexAction(){
		$userManager = new UserManager();
		$users = $userManager->getAll();
		return $this->twig->render('user/listALl.html.twig', array(
			'users' => $users
		));
	}

	public function newAction(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			// Récupérer l'email et le mdp du formulaire


			// Créer un nouvel utilisateur, pour exister, un utilisateur doit posséder un email et un mot de pass


			// Instancier un objet UserManager, cette class contient toutes les méthodes permettant l'intéraction entre User et la BDD


			// Ajouter l'utilisateur dans la bdd vie la méthode addUser de la class UserManager


			// Retourner la page d'accueil'


		}
		else{
			return $this->twig->render('user/new.html.twig');
		}
	}
}