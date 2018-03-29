<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 22:41
 */


if(isset($_POST["email"])&!empty($_POST["email"])&isset($_POST["mdp"])&!empty($_POST["mdp"]))
{
    include("model/loginModel.php");
    include("controler/loginControler.php");
}
else
{
    echo '<script>window.location.replace("./index.php?session=failed&reason=bad_auth");</script>';
}