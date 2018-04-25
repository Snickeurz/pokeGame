<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 25/04/2018
 * Time: 23:30
 */

include ("model/class.pdo.inc.php");
include ("Manager/CompteManager.php");

$pokemon = $_POST["pokemon"];
$id = $_POST["id"];
if(isset($pokemon)&&!empty($pokemon))
{
    if(compteManager::setStarter($pokemon, substr($id,0,1)))
    {
        return true;
    }
    else{
        return false;
    }
}