<?php

/**
 * Récupère toutes les citations de la base
 * @return [array] Tableau de citations
 */
function getAllCitations(){
    // Récuperation de la connection à la base de donnée
    // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"
    global $bdd;

    // Requete qui récupère toutes les citations
    $req = mysqli_query($bdd, 'SELECT * FROM citation');

    // Traitement du resultat retourné par la requete
    $citations = mysqli_fetch_all($req, MYSQLI_ASSOC);

    // Renvoie du tableau contenant toutes les citations
    return $citations;
}

/**
 * Permet d'ajouter une citation
 * @param [string] $author Auteur de la citation
 * @param [string] $chapter Chapitre de la citation
 * @param [string] $content Contenu de la citation
 * @param [string] $date Date de la citation
 * @param [string] $image Image de la citation
 */
function addCitation($author, $chapter, $content, $date, $image){
    // Récuperation de la connection à la base de donnée
    // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"
    global $bdd;

    // Requete d'ajout en base de donnée
    mysqli_query($bdd, "INSERT INTO citation (author, chapter, content, date, image) VALUES ('$author', '$chapter', '$content', '$date', '$image')");
}

/**
 * Récupère une citation précise
 * @param  [int] $id id de la citation
 * @return [array] Retourne la citation
 */
function getCitation($id){
    // On récupère la connection à la BDD
    global $bdd;

    // Requete de récupération d'une citation précise en BDD
    $req = mysqli_query($bdd, "SELECT * FROM citation WHERE id = '$id'");

    // Traitement du résultat de la requête et stockage
    $citation = mysqli_fetch_assoc($req);

    // La fonction renvoie le résultat
    return $citation;
}

/**
 * Modification d'une citation
 * @param [int] $id id de la citation à supprimer
 * @param [string] $author Auteur de la citation
 * @param [string] $chapter Chapitre de la citation
 * @param [string] $content Contenu de la citation
 * @param [string] $date Date de la citation
 * @param [string] $image Image de la citation
 */
function updateCitation($id, $author, $chapter, $content, $date, $image){
    // On récupère la connection à la BDD
    global $bdd;

    // Requete d'update d'une citation précise en BDD
	mysqli_query($bdd, "UPDATE citation SET author = '$author', chapter = '$chapter', content = '$content', date = '$date', image = '$image' WHERE id = '$id'");
}

/**
 * Suppression d'une citation
 * @param  [int] $id Id de la citation
 */
function deleteCitation($id){
    // On récupère la connection à la BDD
    global $bdd;

    // Requete de suppression d'une citation précise en BDD
    mysqli_query($bdd, "DELETE FROM citation WHERE id = '$id'");
}
