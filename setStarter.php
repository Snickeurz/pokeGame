<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 25/04/2018
 * Time: 23:30
 */

include ("model/class.pdo.inc.php");
include ("Manager/CompteManager.php");
include ("Manager/PokemonManager.php");

$post_pokemon = $_POST["pokemon"];
if(isset($post_pokemon)&&!empty($post_pokemon))
{
    $pokemon = $post_pokemon;
}
else
{
    $pokemon=null;
}
$post_id = $_POST["id"];
if(isset($post_id)&&!empty($post_id))
{
    $id = $post_id;
}
else
{
    $id=null;
}


if(isset($pokemon)&&!empty($pokemon))
{
    $id = str_split($id);
    $idPokemon = PokemonManager::getIdByLibelle($pokemon).",";
    if(compteManager::setStarter($pokemon,$id[0], $idPokemon))
    {
        return true;
    }
    else{
        return false;
    }
}
else
{
    exit;
}