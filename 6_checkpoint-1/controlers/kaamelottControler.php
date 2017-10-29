<?php

/**
 * Renvoie la page d'acceuil avec la liste de toutes les citations
 */
function indexAction(){
    // Déclarer une variable $citations qui permttra de stocker toutes les citations
    // On récupèrera les citation grâce à la fonction getAllCitations() présente dans le model
    $citations = getAllCitations();

    // Inclusion de la page d'accueil (home.php)
    include('views/home.php');
}

/**
 * Renvoie la page d'ajout de citation ou bien traite la requete d'enregistrement
 */
function addCitationAction(){
    // Si aucun champs du formulaire n'est renseigné ou encore si le formulaire n'est pas soumis
    
    // On affiche le formulaire
    	
    
    // Sinon, on est dans le cas ou le formulaire est envoyé
    
	// Vérification que tous les champs du formumaire sont bien renseignés, sinon on renvoie un message d'erreur


    // Si certain champs ne sont pas renseigné, on génère un message d'erreur puis on inclut la page du formulaire d'ajout avec le message d'erreur

    	
    // Si tous les champs du formulaire sont renseignés, on stock en base de donnée

    // Récupération des infos du formulaire
	// Sécurité: htmlspecialchars permet de remplacer les caractères spéciaux par leur équivalent  HTML
	// Exemple: < passé dans la fonction htmlspecialchars renvoie &lt;
	// http://php.net/manual/fr/function.htmlspecialchars.php

	// Appel du modele ==> execution de la requete d'enregistrement en base de donné (addCitation())

    // Redirection vers le controllers frontal index.php
}

/**
 * Edition d'une citation
 * Redirige vers le formulaire d'update ou vers la page d'accueil si validation de modification
 */
function editCitationAction(){
    // Récupération de l'id de la citation à supprimer

    // Vérification que le paramètre id est bien un nombre (sécurité)
    // Si c'est bien un nombre, on traitre la demande

    // Si aucun champs du formulaire n'est renseigné ou encore si le formulaire n'est pas soumis

    // On récupère la citation ciblé grâce à son id et a la fonction définit dans le modèle (getCitation())

    // On renvoie la vue du formulaire de modification, les champs de ce dernier seront auto-complété

     // Récupération des infos du formulaire
    // Sécurité: htmlspecialchars permet de remplacer les caractères spéciaux par leur équivalent HTML
    // Exemple: < passé dans la fonction htmlspecialchars renvoie &lt;
    // http://php.net/manual/fr/function.htmlspecialchars.php


    // On les ajoute à la base de donnée grace à la fonction définit dans notre modèle (updateCitation())

    // On redirige vers la page d'accueil


    // Si l'id n'est pas un nombre, on rédirige vers la page d'accueil

}

/**
 * Suppression d'une citation
 */
function deleteCitationAction(){
    // Récupération de l'id de la citation à supprimer

    // Vérification que le paramètre id est bien un nombre (sécurité)
    // Si c'est bien un nombre, on traitre la demande

    // Appel de la fonction du model permettant de supprimer une citation précise

    // On redirige vers la page d'accueil

    // Si l'id n'est pas un nombre, on redirige vers la page d'accueil

}
