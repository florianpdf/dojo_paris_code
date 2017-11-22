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
		var_dump($users); die();
		return $this->twig->render('user/listALl.html.twig', array(
			'users' => $users
		));
	}

	public function newAction(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			// Récupérer l'email et le mdp du formulaire
			$email=$_POST['email'];
			$mdp=$_POST['mdp'];

			// Créer un nouvel utilisateur, pour exister, un utilisateur doit posséder un email et un mot de pass
			$user= new User($email, $mdp);

			// Instancier un objet UserManager, cette class contient toutes les méthodes permettant l'intéraction entre User et la BDD
			$userManager = new UserManager();

			// Ajouter l'utilisateur dans la bdd vie la méthode addUser de la class UserManager
			$userManager->addUser($user);

			// Retourner la page d'accueil'
			return $this->indexAction();

		}
		else{
			return $this->twig->render('user/new.html.twig');
		}
	}
}