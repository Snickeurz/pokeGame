<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 22:41
 */

/**
 * PDO.
 */
include("model/class.pdo.inc.php");
/**
 * Méthodes static pour la gestion du log.
 */
include("model/loginModel.php");

/**
 * On vérifie les variables de type POST reçu ainsi que l'action à faire.
 */
if(isset($_POST["email"])&!empty($_POST["email"])&isset($_POST["password"])&!empty($_POST["password"])&isset($_POST["connexion"]))
{
    /**
     * Vérification des variables fournit.
     */
    if(loginModel::checkUser($_POST["email"], $_POST["password"]))
    {
        /**
         * Initialise session.
         */
        session_start();
        /**
         * Affectation @bool = true à la variable de session __valide.
         */
        $_SESSION["__valide"] = true;
        /**
         * Rediriger l'utlisateur vers index.php.
         */
        echo '<script>window.location.replace("./index.php");</script>';
    }
}
/**
 * L'utilisateur souhaite se créer un compte.
 */
elseif(isset($_POST["create_account"]))
{
    include("inscription.php");
}
else
{
    /**
     * Redirige l'utilisateur vers index.php et doit afficher un message d'erreur.
     */
    echo '<script>window.location.replace("./index.php?session=failed");</script>';
}