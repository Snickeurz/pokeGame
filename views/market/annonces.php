<hr>
<?php

echo "<div class=\"alert alert-light text-center sizeSoldeAnnonce font-weight-bold\" role=\"alert\">";
    echo "SOLDE ACTUELLE : ".$compte->getSolde()." pièces d'or";
echo "</div>";
for($i=0; $i<$collection->getSize();$i++)
{

?>
<div class="row full-width">
    <div class="col bg-annonce">
    </div>
    <div class="col col-7">
        <div class='container bg-white'>
            <div class='row'>
                <div class='col'>
                    <h3 class="font-weight-bold text-center annonce_titre">
                        <?php
                           echo "ANNONCE".$collection->getObjectAtIndex($i)->getIdAnnonce();
                           echo "<br>VENDU PAR :".$collection->getObjectAtIndex($i)->getVendeur();
                        ?>
                    </h3>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="./ressources/images/annonces/annonce.jpg" class="full-width full-height"/>
                        </div>
                        <div class="col">
                            <p class="nom_pokemon_annonce font-weight-bold text-center">
                                <?php
                                    echo $collection->getObjectAtIndex($i)->getPokemon();
                                ?>
                            </p>
                        </div>
                        <div class="col">
                            <p class="description_annonce font-weight-bold">
                                <?php
                                  echo $collection->getObjectAtIndex($i)->getDescription();
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class='col-md-auto'>
                    <h3 class="font-weight-bold text-center annonce_titre">PRIX</h3>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p class="prix_annonce font-weight-bold text-center">
                                <?php
                                 echo $collection->getObjectAtIndex($i)->getPrix();
                                ?>
                            </p>
                        </div>
                        <div class="col">
                            <img src="./ressources/images/annonces/or.jpg" class="full-width full-height"/>
                        </div>
                    </div>
                </div>
                <div class='col col-lg-2'>
                    <h3 class="font-weight-bold text-center annonce_titre">ACTION</h3>
                    <hr>
                    <a href='./index.php?uc=annonces&ac=detail&id=' type='button' class="btn btn-info full-width"><span class="fa fa-eye"></span> Détails</a>
                    <?php
                     $nomPoke = $collection->getObjectAtIndex($i)->getPokemon();
                     $idPokemon = PokemonManager::getIdByLibelle($nomPoke);
                     //var_dump(PokemonManager::getIdByLibelle($nomPoke));

                    echo "<a href='./index.php?achat.php?id=$idPokemon' type='button' class='btn btn-warning full-width'><span class='fa fa-credit-card'></span> Acheter</a>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col bg-annonce">
    </div>
</div>
<?php
    echo "<br>";
}
?>
<hr>