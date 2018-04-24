<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 22:20
 */


$collection = new Collection();
$annonces = AnnoncesManager::constructAllAnnoncesFromDB();
foreach ($annonces as $annonce)
{
    $marketModel = new MarketModel(
        $annonce[0],$annonce[1],$annonce[2],$annonce[3],$annonce[4],$annonce[5]
    );
    $collection->addInCollection($marketModel);
}
