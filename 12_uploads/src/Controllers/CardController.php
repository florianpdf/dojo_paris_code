<?php

namespace MyApp\Controllers;

use MyApp\Model\Repository\CardManager;
use MyApp\Services\UploadedFile;
use MyApp\Services\Uploads;

/**
 * Class DefaultController
 * @package MyApp\Controllers
 */
class CardController extends Controller
{
	/**
	 * List all user
	 * @return string
	 */
	public function indexAction(){
		$cardManager = new CardManager();
		$cards = $cardManager->getAll();
		return $this->twig->render('card/listALl.html.twig', array(
			'cards' => $cards,
		));
	}

	/**
	 * @return string
	 */
	public function newAction(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){

			// Récupérer du tableau d'image envoyé par le formulaire
			$files = $_FILES['images'];

			$upload = new Uploads();
			$cardManager = new CardManager();

			// Parcourir le tableau d'image
			foreach ($files['name'] as $position => $file_name) {

				// Pour chaque image, vérifier s'il n'y a pas d'erreur lié à php ($_FILES['files']['error']
				$error = $files['error'][$position];
				if ($error != 0) {
					// S'il il y a une erreur php, stocker le message d'erreur dans une variable
					$error[$file_name] = "erreur PHP";

				// Sinon on upload
				} else {

					// Récupération et stockage du name, tmp_name, size du fichier
					$size = $files['size'][$position];
					$tmp_name = $files['tmp_name'][$position];

					// Instanciation d'une objet UploadedFile
					$uploadedFile = new UploadedFile($file_name, $tmp_name, $size);

					// Upload du fichier via la méthode défini dans le service
					$result = $upload->upload($uploadedFile);

					// Traitement du resultat, si pas d'erreur, on enregitre en BDD, sinon, on ajout un message en session
					if ($result == null){
						$cardManager->addImage($uploadedFile->getFileName());
					}
				}
			}

			// On redirige vers la page d'acceuil
			header("Location: index.php");
		}
		else{
			return $this->twig->render('card/new.html.twig');
		}
	}
}