<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 30/03/2018
 * Time: 14:39
 */

/**
 * Méthode utilitaire pour la déconnexion.
 * Détruit la session et redirige l'utilisateur.
 */
function logOut()
{
    session_destroy();
    echo '<script>window.location.replace("./index.php");</script>';
}