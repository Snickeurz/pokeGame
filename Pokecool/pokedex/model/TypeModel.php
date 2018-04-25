<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 26/03/2018
 * Time: 14:08
 */

class TypeModel
{

    /**
     * Récupère le libelle d'un type donné
     *
     * @param $idType l'id du type à chercher
     * @return mixed le libelle du type correspondant
     */
    public static function getLibelleType($idType)
    {
        $libelleType = Connexion::getInstance()->prepare("SELECT libelleType FROM type WHERE id = :idType");
        $libelleType->bindParam(":idType", $idType);
        $libelleType->execute();
        return $libelleType->fetchColumn();
    }

    /**
     * Récupère tous les nom de types existants
     * @return mixed
     */
    public static function getAllLibelle()
    {
        $allLibelle = Connexion::getInstance()->prepare("SELECT libelleType FROM type");
        $allLibelle->execute();
        return $allLibelle->fetchAll();
    }

    /**
     * Récupère tous les champs de la table type
     *
     * @return mixed les id/libelle
     */
    public static function getAllType()
    {
        $all = Connexion::getInstance()->prepare("SELECT * FROM type");
        $all->execute();
        return $all->fetchAll();
    }
}