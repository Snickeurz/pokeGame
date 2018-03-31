<?php

session_start();
/**
 * Inclusion de méthodes utilitaires :
 */
include("helperMethode.php");
/**
 * inclusion de l'entête html
 */

include("base.html");

/**
 * Vérification de la session active ou non.
 * Si la session n'est pas initialisé redirigé l'utilisateur vers la page d'authentification.
 * Sinon rediriger la personne vers l'écran d'accueil du site internet.
 */
if(!isset($_SESSION["__valide"]))
{
    /**
     * Interface d'authenfication.
     */
    include("loginInterface.html");
}
else
{
    /**
     * Inclusion de la barre de naviguation.
     */
    include("nav.html");

    /**
     * Récupère le paramètre "uc" de l'url.
     */
    $uc = getUc();//from helperMethode
    /**
     * Récupère le paramètre "ac" de l'url.
     */
    $ac = getAc();//from helperMethode

    /**
     * Aiguillage sur le paramètre uc récupéré précédemment.
     * Pour chaque <case> on aiguille ac pour choisir une action à faire.
     */
    switch ($uc)
    {
        /**
         * L'utilisateur souhaite se rendre sur l'écran d'accueil.
         */
        case "accueil":
            include("views/home.html");
            break;
        /**
         * L'utilisateur souhaite se faire une action sur son profil.
         */
        case "compte":
            include("model/CompteModel.php");
            include("controler/CompteControler.php");
            switch ($ac)
            {
                /**
                 * L'utilisateur souhaite consulter son profil
                 */
                case "show":
                    include("views/dresseur/profil.html");
                    include("views/dresseur/modalChangePassword.html");
                    break;
                /**
                 * Par défaut on effectue aucune action.
                 */
                default:
                    break;
            }
            break;
        /**
         * L'utilisateur souhaite faire une action dans le marché.
         */
        case "annonces":
            include("model/MarketModel.php");
            include("controler/annonceControler.php");
            switch ($ac)
            {
                /**
                 * L'utilisateur souhaite afficher les annonces.
                 */
                case "show":
                    include("views/market/annonces.php");
                    break;
                case "detail":
                    include("views/market/detailAnnonce.php");
                    break;
                /**
                 * Par défaut on effectue aucune action.
                 */
                default:
                    break;
            }
            break;
        /**
         * L'utilisateur souhaite faire une action sur les pokémons.
         */
        case "pokemon":
            include("model/PokemonModel.php");
            include("controler/pokemonControler.php");
            switch ($ac)
            {
                /**
                 * L'utilisateur souhaite consulter pokémon.
                 */
                case "show":
                    break;
                /**
                 * Par défaut on effectue aucune action.
                 */
                default:
                    break;
            }
            break;
        /**
         * L'utilisateur souhaite mener bataille.
         */
        case "combat":
            include("model/EntrainementModel.php");
            include("controler/entrainementControler.php");
            include("views/combat/courbe_experience.php");
            switch ($ac)
            {
                /**
                 * Lancement de l'interface de combat.
                 */
                case "play":
                    include("views/combat/combat.html");
                    break;
                /**
                 * Par défaut on effectue aucune action.
                 */
                default:
                    break;
            }
            break;
        /**
         * L'utilisateur souhaite se déconnecter du site.
         */
        case "logout":
            /**
             * Méthode utilitaire de déconnexion.
             */
            include("logout.php");
            logOut();
            break;
        /**
         * Par défaut on affiche la page d'accueil.
         */
        default:
            include("views/home.html");
            break;
    }
    /**
     * Inclusion du footer html.
     */
    include("footer.html");
}
?>