<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 26/03/2018
 * Time: 11:31
 */

/**
 * Sert d'aiguilleur pour rediriger vers la bonne vue
 */


if(isset($_GET["ac"])&&!empty($_GET["ac"]))
{
    $action = $_GET["ac"];
}else
{
    $action = "";
}
switch ($action)
{
    case "accueil":
        $nbPokemons = PokemonModel::getNombrePokemon();
        $last5Pokemons = PokemonModel::getNameOfLast5Pokemon();
        $allTypes = TypeModel::getAllType();
        $nbBase = PokemonModel::getNombrePokemonByEvolution(0);
        $nbEvol = PokemonModel::getNombrePokemonByEvolution(1);
        include("./views/home.html");
        break;

    case "liste_pokemon":
        $informations = PokemonModel::getAllInformations();
        include("./views/listePokemon.html");
        break;

    default:
        break;

}