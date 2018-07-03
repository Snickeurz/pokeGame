<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 03/07/2018
 * Time: 17:17
 */

if(isset($_POST["sell_pokemon"]))
{
    $prix = $_POST["prix_vente"];
    var_dump($compte->getNom());
    var_dump(AnnoncesManager::addAnnonceInDB($compte->getNom(), $_POST["pokemon_vente"], $_POST["prix_vente"], $_POST["description"]));
}