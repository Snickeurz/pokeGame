<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 21:37
 */


$compte = null;
$compte = compteManager::constructCompteFromDB($_SESSION["id"]);
