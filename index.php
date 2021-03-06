<?php
/**
 * Set session.
 */
session_start();

/**
 * PDO.
 */
include("model/class.pdo.inc.php");


/***********************************
 *          DECLARATIONS           *
 *          -------------          *
 *             MODELS              *
 *            MANAGERS             *
 **********************************/
/**
 * Collection
 */

include ("model/collection/Collection.php");

/**
 * Compte
 */
include("model/CompteModel.php");
include("manager/CompteManager.php");

/**
 * annonces
 */
include("model/MarketModel.php");
include("Manager/AnnoncesManager.php");
/**
 * Pokemon
 */
include("model/PokemonModel.php");
include("Manager/PokemonManager.php");

/**
 * Comat
 */
include("Manager/EntrainementManager.php");
include("views/combat/courbe_experience.php");



/**
 * Inclusion de méthodes utilitaires get[Uc][Ac]:
 * Notamment la récupération des paramètres uc & ac.
 */
include("helperMethode.php");

/////////////////////////////////////////////////////////////////////
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
     * Compte controler.
     */
    include("controler/CompteControler.php");
    /**
     * Starter
     */
    include("starter.php");

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
            include("controler/AnnonceControler.php");
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
                case "vente_pokemon":
                    include("controler/VentePokemon.php");
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
            include("controler/pokemonControler.php");
            switch ($ac)
            {
                /**
                 * L'utilisateur souhaite consulter pokémon.
                 */
                case "show":
                    include("views/dresseur/listePokemon.html");
                    break;
                /**
                 * Par défaut on effectue aucune action.
                 */
                default:
                    break;
            }
            break;
        /**
         * L'utilisateur souhaite partir en croisade.
         */
        case "combat":
            switch ($ac)
            {
                /**
                 * Lancement de l'interface de combat.
                 */
                case "play":
                    /**
                     * EntrainementControler.
                     */
                    include("controler/EntrainementControler.php");

                    include("views/combat/combat.html");
                    break;
                case "capture":
                    include("controler/EntrainementControler.php");
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