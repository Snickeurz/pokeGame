<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 21:37
 */

class CompteControler
{
    /**
     * Met à jour l'xp du compte.
     *
     * @param $xp
     * @return mixed
     */
    public function gainExp($xp)
    {
        $compte = new CompteModel();
        $monPdo = MonPdo::getInstance();

        $compte->setExperience($xp);
        $updateXP = $monPdo->prepare("UPDATE users SET xp = :xp");
        $updateXP->bindParam(":xp", $xp);
        return $updateXP->execute();
    }


}