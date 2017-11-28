<?php

namespace MyApp\Model\Repository;

use PDO;

/**
 * Class CardManager
 * @package MyApp\Model\Repository
 */
class CardManager extends Manager {

	/**
	 * Get all user
	 * @return array
	 */
	public function getAll(){
//		Définition de la requete
		$req = $this->db->query('SELECT * FROM images');

//		Traitement et renvoie du résultat
		return $req->fetchAll();
	}

	/**
	 * Add image in bdd
	 * @param $url
	 */
	public function addImage($url){
		// Préparer la requete
		$req = $this->db->prepare("INSERT INTO images (url) VALUES (:url)");
		// Executer la requete
		$req->execute(array(
			':url' => $url
		));
	}
}