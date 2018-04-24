<?php

class EntrainementModel
{
    /**
     * Permet de récupérer les lieux de combat disponible.
     *
     * @return array de $lieux
     */
    public static function getLieux()
    {
        $monPdo = MonPdo::getInstance();
        $lieux = $monPdo->prepare("SELECT * FROM lieux");
        $lieux->execute();
        return $lieux->fetchAll();
    }
}
