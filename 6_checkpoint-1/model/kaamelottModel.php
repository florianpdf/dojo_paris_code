<?php

/**
 * Récupère toutes les citations de la base
 * @return [array] Tableau de citations
 */
function getAllCitations(){
    // Récuperation de la connection à la base de donnée
    // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"
    global $bdd;
    // var_dump($bdd);
    
    // Requete qui récupère toutes les citations
    $resultSQL = mysqli_query($bdd, "SELECT * FROM citation");
    // echo mysqli_error($bdd);
    // var_dump($resultSQL);

    // Traitement du resultat retourné par la requete
    $citations = mysqli_fetch_all($resultSQL, MYSQLI_ASSOC);
    // var_dump($citations); die();

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
    global $bdd;
    // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"

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

    // Requete de récupération d'une citation précise en BDD

    // Traitement du résultat de la requête et stockage

    // La fonction renvoie le résultat
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

    // Requete d'update d'une citation précise en BDD
}

/**
 * Suppression d'une citation
 * @param  [int] $id Id de la citation
 */
function deleteCitation($id){
    // On récupère la connection à la BDD
    global $bdd;

    // Requete de suppression d'une citation précise en BDD
    mysqli_query($bdd, "DELETE FROM citation WHERE id='$id'");
}
