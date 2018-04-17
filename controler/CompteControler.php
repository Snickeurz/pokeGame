<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 21:37
 */


$compte = null;
$compte = \collection\compteManager::constructCompteFromDB($_SESSION["id"]);

var_dump($compte);