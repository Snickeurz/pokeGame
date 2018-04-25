<?php

include("model/Connexion.php");
include("model/PokemonModel.php");
include("model/TypeModel.php");
include("base.html");
include("nav.html");
include("jumbotron.html");
include("views/ajoutPokemonModal.html");

if(isset($_GET["uc"])&&!empty($_GET["uc"]))
{
    $uc = $_GET["uc"];
}else
{
    $uc = "redirect";
}
switch ($uc)
{
    case "redirect":
        include("controler/mainControler.php");
        break;

    case "pokemon":
        include("controler/pokemonControler.php");
        break;

    default:
        break;
}
include("footer.html");

?>