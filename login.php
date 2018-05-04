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
include("model/LoginModel.php");

/**
 * On vérifie les variables de type POST reçu ainsi que l'action à faire.
 */
if(isset($_POST["email"])&!empty($_POST["email"])&isset($_POST["password"])&!empty($_POST["password"])&isset($_POST["connexion"]))
{
    /**
     * Vérification des variables fournit.
     */
    $id = null;
    $id = LoginModel::checkUser($_POST["email"], $_POST["password"]);
    if($id != null)
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
         * Paramètre un id de session
         */
        $_SESSION["id"] = $id;
        /**
         * Rediriger l'utlisateur vers index.php.
         */
        echo '<script>window.location.replace("./index.php?uc=accueil&ac=show");</script>';
    }
    /**
     * Redirige l'utilisateur vers index.php et doit afficher un message d'erreur.
     */
    else
    {
        echo '<script>window.location.replace("./index.php?login=fail");</script>';
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
    exit;
}