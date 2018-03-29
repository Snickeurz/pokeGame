<?php

function courbeRapide($n)
{
    return 0.8 * pow($n,3);
}

function courbeMoyenne($n)
{
    return pow($n,3);
}

function courbeLente($n)
{
    return 1.25 * pow($n,3);
}
?>