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
    if(AnnoncesManager::addAnnonceInDB($compte->getNom(), $_POST["pokemon_vente"], $_POST["prix_vente"], $_POST["description"]))
    {
        echo "<script>window.location.href='./index.php?uc=annonces&ac=show'</script>";
    }
}