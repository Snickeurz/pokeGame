<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 26/03/2018
 * Time: 15:25
 */

/**
 * Permet de faire d'appliquer le CRUD sur les pokemons
 */

if(isset($_GET["ac"])&&!empty($_GET["ac"]))
{
    $action = $_GET["ac"];
}else
{
    $action = "";
}


$idPokemon = null;
if(isset($_GET['idPokemon'])&&!empty($_GET['idPokemon']))
{
    $idPokemon = $_GET['idPokemon'];
}

switch ($action)
{
    case "delete":
        if($idPokemon)
        {
            if(PokemonModel::killDatPokemon($idPokemon))
            {
                echo '<script>window.location.replace("./index.php?uc=redirect&ac=liste_pokemon&delete=true");</script>';
            }
            else
            {
                echo '<script>window.location.replace("./index.php?uc=redirect&ac=liste_pokemon&delete=false");</script>';
            }
        }
        break;

    case "add":
        if(PokemonModel::addPokemon($_POST["nom_pokemon"], $_POST["select_type_1"], $_POST["select_type_2"], $_POST["radios_evolution"]))
        {
            echo '<script>window.location.replace("./index.php?uc=redirect&ac=liste_pokemon&ajout=true");</script>';
        }
        else
        {
          //  echo '<script>window.location.replace("./index.php?uc=redirect&ac=liste_pokemon&ajout=false");</script>';
        }
        break;

    case "show":
        $informationsPokemon = PokemonModel::getAllInformationsById($idPokemon);
        include("./views/detailsPokemon.html");
        break;

    case "update":

        break;

    default:
        break;
}