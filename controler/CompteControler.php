<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 21:37
 */


$compte = null;
$compte = compteManager::constructCompteFromDB($_SESSION["id"]);

/////////////////////////////////////////////////////////////////
///
$collectionPokemon = new Collection();
$listePokemon = compteManager::getListePokemon($_SESSION["id"]);
$arrayPokemon = explode(",",$listePokemon);
foreach ($arrayPokemon as $unPokemon)
{
    $collectionPokemon->addInCollection(PokemonManager::constructCompteFromDB($unPokemon));
}
