<?php

/**
 * Récupération des champs du formulaire.
 */
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$pseudo = $_POST["pseudo"];
$tel = $_POST["tel"];
$email = $_POST["emailNewCompte"];
$pass = $_POST["pass"];
/**
 * Persistance des données.
 */
if(loginModel::inscription($nom, $prenom, $pseudo, $tel, $email, $pass))
{
    /**
     * Redirection sur index.php avec le paramètre @compte = created.
     */
    echo '<script>window.location.replace("./index.php?compte=created");</script>';
}

?>