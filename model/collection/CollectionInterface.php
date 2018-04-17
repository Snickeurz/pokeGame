<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 05/04/2018
 * Time: 21:10
 */

namespace collection;

interface CollectionInterface
{
    /**
     * Ajoute un élément dans une collection.
     */
    function addInCollection($param);

    /**
     * Récupère une collection.
     */
    public function getCollection();

    /**
     * Renvoie la taille de la collection.
     */
    public function getSize();

    /**
     * Récupère un élément du tableau à un index donné.
     *
     * @param int $index
     */
    public function getAtIndex($index);

}