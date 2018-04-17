<?php

namespace collection;

class compteManager
{
    /**
     * Récupère les informations d'un compte en fonction d'un id.
     *
     * Pour chaque ligne trouvé, instancier un objet de classe MarketModel et le push dans un array de Collection.
     * @return object une collection de MarketModel.
     */
    public static function constructCompteFromDB($id)
    {
        $monPdo = MonPdo::getInstance();
        $compte = null;

        $informations = $monPdo->prepare("SELECT * FROM users WHERE id = :id");
        $informations->bindParam(":id", $id, PDO::PARAM_INT);
        $informations->execute();
        $informations->fetchAll();

        foreach ($informations as $information)
        {
            $compte = new CompteModel();
        }
        return $compte;
    }

    /**
     * Récupère la liste des pokémons du dresseur.
     *
     * @param int $id l'id du dresseur
     * @return Collection de pokémon
     */
    public static function getListePokemon($id)
    {
        $monPdo = MonPdo::getInstance();
        $collectionPokemon = new Collection();

        $listePokemonPossede = $monPdo->prepare("SELECT arrayPokemon FROM users WHERE id = :id");
        $listePokemonPossede->bindParam(":id", $id, PDO::PARAM_INT);
        $listePokemonPossede->execute();
        $listePokemonPossede->fetchColumn();

        $arrayPokemon = str_split(",",$listePokemonPossede);

        foreach ($arrayPokemon as $unPokemon)
        {
            $collectionPokemon->addInCollection($unPokemon);
        }

        return $collectionPokemon;
    }


}