<?php

$lieux = EntrainementManager::getLieux();


if(isset($_POST["capture_pokemon"])&&!empty($_POST["capture_pokemon"]))
{
    //var_dump(PokemonManager::setHeureEntrainement($_POST["selectpokemon"]));
    $pokemonCapture = EntrainementManager::getRandomPokemonFromCSV();
 echo "<div class='card'><div class='card-header'><span class='fa fa-bookmark'></span> Information du pokémon capturé";
 echo "</div> <div class='card-body'>";
        echo "<p class='card-text'>";
        echo "<ul id='lsitePokemonPossede'>";
        echo "<li>";
        echo  "LEVEL : ".$pokemonCapture[0];
        echo "</li>";
        echo "<li>";
        echo  "Nom : ".$pokemonCapture[1];
        echo "</li>";
        echo "<li>";
        echo  "Habitat : ".$pokemonCapture[2];
        echo "</li>";
        echo "<li>";
        echo  "Evolution : ".$pokemonCapture[3];
        echo "</li>";
        echo "<li>";
        echo  "TYPE : ".$pokemonCapture[4].$pokemonCapture[5];
        echo "</li>";
echo "</ul></p></div></div>";
}