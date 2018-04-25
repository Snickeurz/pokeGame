<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 26/03/2018
 * Time: 13:58
 */

class PokemonModel
{

    /**
     * Ajoute un pokemon en base de donnée
     *
     * @param $nomPokemon le nom du pokémon
     * @param $type1 le type 1 du pokemon
     * @param $type2 le type 2 du pokemon
     * @param $evolution S'il possède une évolution ou non
     * @return mixed l'état de l'insertion
     */
    public static function addPokemon($nomPokemon, $type1, $type2, $evolution)
    {
        $addPokemon = Connexion::getInstance()->prepare("INSERT INTO pokemon(nom, type1, type2, evolution) VALUES (:nomPokemon, :type1, :type2, :evolution)");
        $addPokemon->bindParam("nomPokemon",$nomPokemon);
        $addPokemon->bindParam("type1",$type1);
        $addPokemon->bindParam("type2",$type2);
        $addPokemon->bindParam("evolution",$evolution);
        return $addPokemon->execute();
    }
    /**
     * Récupère toutes les informations de tous les pokémons
     * @return mixed les résultats trouvé
     */
    public static function getAllInformations()
    {
        $allPokemons = Connexion::getInstance()->prepare("SELECT * FROM pokemon");
        $allPokemons->execute();
        return $allPokemons->fetchAll();
    }

    /**
     * Récupère toutes les informations d'un pokémon donné
     *
     * @param $idPokemon l'id du pokemon a chercher
     * @return mixed les informations du pokemons correspondant
     */
    public static function getAllInformationsById($idPokemon)
    {
        $informations = Connexion::getInstance()->prepare("SELECT * FROM pokemon WHERE id = :id");
        $informations->bindParam(":id",$idPokemon);
        $informations->execute();
        return $informations->fetch();
    }
    /**
     * Trouve le nom d'un pokémon en fonction d'un id donné
     * @param $idPokemon
     * @return mixed
     */
    public static function getNom($idPokemon)
    {
        $nomPokemon = Connexion::getInstance()->prepare("SELECT nom FROM pokemon WHERE id = :id");
        $nomPokemon->bindParam(":id", $idPokemon);
        $nomPokemon->execute();
        return $nomPokemon->fetchColumn();
    }

    /**
     * Récupère le type 1 et le type 2 du pokemon
     *
     * @param $idPokemon l'id du pokémon
     * @return mixed les id des types trouvé pour le pokemons
     */
    public static function getIdTypes($idPokemon)
    {
        $typesPokemon = Connexion::getInstance()->prepare("SELECT type1, type2 FROM pokemon WHERE id = :id");
        $typesPokemon->bindParam(":id", $idPokemon);
        $typesPokemon->execute();
        return $typesPokemon->fetchAll();
    }

    /**
     * Récupère le champ evolution de la table pokemon
     * C'est un tinyInt, donc considérer comme un boolean.
     *
     * @param $idPokemon l'id du pokémon à chercher
     * @return mixed le resultat de la column
     */
    public static function getEvolution($idPokemon)
    {
        $canEvoluate = Connexion::getInstance()->prepare("SELECT evolution FROM pokemon WHERE id = :id");
        $canEvoluate->bindParam(":id", $idPokemon);
        $canEvoluate->execute();
        return $canEvoluate->fetchColumn();
    }

    /**
     * Compte le nombre de pokémon présent dans la base
     * @return mixed le nombre de pokémon trouvé
     */
    public static function getNombrePokemon()
    {
        $nombrePokemon = Connexion::getInstance()->prepare("SELECT count(*) FROM pokemon");
        $nombrePokemon->execute();
        return $nombrePokemon->fetchColumn();
    }

    /**
     * Récupère les 5 derniers pokémon insérer
     * @return mixed les noms des 5 derniers pokemons
     */
    public static function getNameOfLast5Pokemon()
    {
        $last5Pokemon = Connexion::getInstance()->prepare("SELECT nom FROM pokemon ORDER BY id DESC LIMIT 5");
        $last5Pokemon->execute();
        return $last5Pokemon->fetchAll();
    }

    /**
     * Permet d'obtenir le nombre de pokemon possédant l'id d'un type spécifié
     *
     * @param $idType l'id du type à chercher
     * @return mixed le nombre de pokemon possedant le type
     */
    public static function getCountOfSpecifiedType($idType)
    {
        $count = Connexion::getInstance()->prepare("SELECT count(*) FROM pokemon WHERE type1 = :type OR type2 = :type");
        $count->bindParam(":type", $idType);
        $count->execute();
        return $count->fetchColumn();
    }

    /**
     * Compte le nombre de pokemon en fonction d'une évolution :
     *  Exemple : 0 --> Ne possède pas d'évolution
     *  1 --> possède une évolution
     *
     * @param $evolution 1 ou 0
     * @return mixed le nombre de pokemon trouvé ayant cette évolution
     */
    public static function getNombrePokemonByEvolution($evolution)
    {
        $count = Connexion::getInstance()->prepare("SELECT count(*) FROM pokemon WHERE evolution = :evolution");
        $count->bindParam(":evolution", $evolution);
        $count->execute();
        return $count->fetchColumn();
    }

    /**
     * Tue sauvagement un pokémon en fonction d'un id donné
     *
     * @param $idPokemon l'id du pokémon à matar
     * @return mixed l'état de l'execution du pokémon
     */
    public static function killDatPokemon($idPokemon)
    {
        $deletePokemon = Connexion::getInstance()->prepare("DELETE FROM pokemon WHERE id = :id");
        $deletePokemon->bindParam(":id", $idPokemon);
        return $deletePokemon->execute();
    }
}