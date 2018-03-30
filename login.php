<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 22:41
 */

include("model/class.pdo.inc.php");
include("model/loginModel.php");

if(isset($_POST["email"])&!empty($_POST["email"])&isset($_POST["password"])&!empty($_POST["password"])&isset($_POST["connexion"]))
{
    if(loginModel::checkUser($_POST["email"], $_POST["password"]))
    {
        session_start();
        $_SESSION["__valide"] = true;
        echo '<script>window.location.replace("./index.php");</script>';
    }
}
elseif(isset($_POST["create_account"]))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $pseudo = $_POST["pseudo"];
    $tel = $_POST["tel"];
    $email = $_POST["emailNewCompte"];
    $pass = $_POST["pass"];

    if(loginModel::inscription($nom, $prenom, $pseudo, $tel, $email, $pass))
    {
        echo '<script>window.location.replace("./index.php?compte=created");</script>';
    }
}
else
{
    echo '<script>window.location.replace("./index.php?session=failed&reason=bad_auth");</script>';
}