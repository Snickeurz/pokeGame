<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 05/04/2018
 * Time: 21:20
 */

class AnnoncesManager
{
    /**
     * Récupère les informations de toutes les annonces en BDD.
     *
     * Pour chaque ligne trouvé, instancier un objet de classe MarketModel et le push dans un array de CollectionAnnonce.
     * @return object une collection de MarketModel.
     */
    public static function constructAllAnnoncesFromDB()
    {
        $monPdo = MonPdo::getInstance();
        $collection = new CollectionAnnonce();

        $annonces = $monPdo->prepare("SELECT * FROM annonces");
        $annonces->execute();
        $annonces->fetchAll();

        foreach ($annonces as $annonce)
        {
            $collection->addInCollection(new MarketModel($annonce["id"],$annonce["vendeur"],$annonce["pokemon"],$annonce["prix"],$annonce["description"],$annonce["datePublication"]));
        }

        return $collection->getCollection();
    }

    /**
     * Supprime une annonce dans la base de donnée en fonction d'un ID donné.
     *
     * @param int $idAnnonce l'id de l'annonce
     * @return mixed le resultat de la supression
     */
    public static function deleteAnnonceByIdInDB($idAnnonce)
    {
        $monPdo = MonPdo::getInstance();

        $delete = $monPdo->prepare("DELETE FROM annonces WHERE id = :idAnnonce");
        $delete->bindParam(":idAnnonce", $idAnnonce, PDO::PARAM_STR);

        return $delete->execute();
    }

    /**
     * Insère une nouvelle annonce en base de donnée.
     *
     * @param string $vendeur le nom du vendeur
     * @param string $pokemon le nom du pokemon
     * @param int $prix le prix de vente
     * @param string $description la description
     * @param DateTime $datePublication la date de publication
     * @return mixed
     */
    public static function addAnnonceInDB($vendeur, $pokemon, $prix, $description, $datePublication)
    {
        $monPdo = MonPdo::getInstance();

        $insert = $monPdo->prepare("INSERT INTO annonces (vendeur, pokemon, prix, description, datePublication) VALUES (:vendeur, :pokemon, :prix, :description, :datePublication)");
        $insert->bindParam(":vendeur", $vendeur, PDO::PARAM_STR);
        $insert->bindParam(":pokemon", $pokemon, PDO::PARAM_STR);
        $insert->bindParam(":prix", $prix, PDO::PARAM_INT);
        $insert->bindParam(":description", $description, PDO::PARAM_STR);
        $insert->bindParam(":datePublication", $datePublication);

        return $insert->execute();
    }
}