<?php

/**
 * Méthode utilitaire pour la courbe de progression.
 * Progression rapide.
 *
 * @param $n le niveau du joueur.
 * @return float l'experience nécessaire pour up.
 */
function courbeRapide($n)
{
    return 0.8 * pow($n,3);
}

/**
 * Méthode utilitaire pour la courbe de progression.
 * Progression moyenne.
 *
 * @param $n le niveau du joueur.
 * @return float l'experience nécessaire pour up.
 */
function courbeMoyenne($n)
{
    return pow($n,3);
}

/**
 * Méthode utilitaire pour la courbe de progression.
 * Progression lente.
 *
 * @param $n le niveau du joueur.
 * @return float l'experience nécessaire pour up.
 */
function courbeLente($n)
{
    return 1.25 * pow($n,3);
}
?>