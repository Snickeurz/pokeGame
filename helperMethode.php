<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 21:37
 */

function getAc()
{
    $ac = "";
    if(isset($_GET["ac"])&&!empty($_GET["ac"]))
    {
        $uc = $_GET["ac"];
    }
    return $ac;
}
function getUc()
{
    $uc = "";
    if(isset($_GET["uc"])&&!empty($_GET["uc"]))
    {
        $uc = $_GET["uc"];
    }
    return $uc;
}