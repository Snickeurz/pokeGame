<?php

include("helperMethode.php");
include("base.html");
//include("nav.html");
include("loginInterface.html");

//from helperMethode
$uc = getUc();
$ac = getAc();

switch ($uc)
{
    case "compte":
        include("model/compteModel.php");
        include("controler/compteControler.php");
        switch ($ac)
        {
            case "show":
                include("views/dresseur/profil.html");
                break;
            default:
                break;
        }
        break;

    case "annonces":
        include("model/marketModel.php");
        include("controler/annonceControler.php");
        switch ($ac)
        {
            case "show":
                include("views/market/marketPlace.html");
                break;
            default:
                break;
        }
        break;

    case "pokemon":
        include("model/pokemonModel.php");
        include("controler/pokemonControler.php");
        switch ($ac)
        {
            case "show":
                break;
            default:
                break;
        }
        break;

    case "combat":
        include("model/entrainementModel.php");
        include("controler/entrainementControler.php");
        include("views/combat/courbe_experience.php");
        switch ($ac)
        {
            case "play":
                include("views/combat/combat.html");
                break;
            default:
                break;
        }
        break;

    default:
        break;
}

include("footer.html");
?>