<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 30/03/2018
 * Time: 14:39
 */

function logOut()
{
    session_destroy();
    echo '<script>window.location.replace("./index.php");</script>';
}