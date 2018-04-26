<?php

/**
 * Récupération des champs du formulaire.
 */
$nom = $_POST["nom"]; // Le nom de famille.
$prenom = $_POST["prenom"]; // Le prénom.
$pseudo = $_POST["pseudo"]; // Le pseudo in game.
$tel = $_POST["tel"]; // Le numéro de tél.
$email = $_POST["emailNewCompte"]; // L'adresse email associé au compte.
$pass = $_POST["pass"]; // Le mot de passe du compte.
/**
 * Persistance des données.
 */
var_dump(loginModel::inscription($nom, $prenom, $pseudo, $tel, $email, $pass));
if(loginModel::inscription($nom, $prenom, $pseudo, $tel, $email, $pass))
{
    /**
     * Redirection sur index.php avec le paramètre @compte = created.
     */
    echo '<script>window.location.replace("./index.php?compte=created");</script>';
}

?>