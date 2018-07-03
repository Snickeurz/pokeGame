<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicolas
 * Date: 28/04/2018
 * Time: 14:34
 */

class PokemonManager
{
    /**
     * Récupère les Pokemons.
     *
     * Pour chaque ligne trouvé, instancier un objet de classe Pokemon et le push dans un array de Collection.
     *
     * @param int $id l'id du pokemon
     * @return object $pokemon un pokemon
     */
    public static function constructCompteFromDB($id)
    {
        $monPdo = MonPdo::getInstance();
        $pokemon = new PokemonModel();
        try
        {
            $informations = $monPdo->prepare("SELECT id, espece, type1, type2, evolution, sexe, xp, lvl, vie FROM pokemon WHERE id = :id");
            $informations->bindParam(":id", $id, PDO::PARAM_INT);
            $informations->execute();

            while ($info = $informations ->fetch(PDO::FETCH_ASSOC))
            {
                $pokemon->setId($info["id"]);
                $pokemon->setEspece($info["espece"]);
                $pokemon->setType1($info["type1"]);
                $pokemon->setType2($info["type2"]);
                $pokemon->setEvolution($info["evolution"]);
                $pokemon->setSexe($info["sexe"]);
                $pokemon->setExperience($info["xp"]);
                $pokemon->setLevel($info["lvl"]);
                $pokemon->setVie($info["vie"]);
            }
        }
        catch (\Exception $e)
        {
            $e->getMessage();
        }
        return $pokemon;
    }

    /**
     * Récupère l'id du pokemon.
     *
     * @param string $libelle
     * @return string || null
     */
    public static function getIdByLibelle($libelle)
    {
        $monPdo = MonPdo::getInstance();
        $id = $monPdo->prepare("SELECT id from pokemon WHERE espece = :libelle");
        $id->bindParam(":libelle", $libelle);
        $id->execute();
        var_dump($libelle);
        return $id->fetchColumn();
    }

    /**
     * Augmente l'experience aléatoirement entre 10 et 30.
     *
     * @param int $idPokemon
     * @param int $actualXp
     */
    public static function addRandomXp($idPokemon, $actualXp)
    {
        $rand = rand(10,30);
        $xp = $rand + $actualXp;
        $monPdo = MonPdo::getInstance();
        $updateXp = $monPdo->prepare("UPDATE pokemon SET xp = :xp WHERE id = :id");
        $updateXp->bindParam(":xp",$xp);
        $updateXp->bindParam(":id",$idPokemon);
        return $updateXp->execute();
    }

    /**
     * Récupère l'xp du pokemon.
     *
     * @param int $idPokemon
     * @return int xp du pokemon
     */
    public static function getXp($idPokemon)
    {
        $monPdo = MonPdo::getInstance();
        $getXp = $monPdo->prepare("SELECT xp FROM pokemon WHERE id = :id");
        $getXp->bindParam(":id",$idPokemon);
        return $getXp->execute();
    }

    /**
     * Détermine si un pokemon peut s'entraîner.
     *
     * @param int $idPokemon
     * @return bool true s'il peut s'entraîner sinon false
     */
    public static function canTrain($idPokemon)
    {
        $monPdo = MonPdo::getInstance();
        $canTrain = $monPdo->prepare("SELECT heureEntrainement FROM pokemon WHERE id = :id");
        $canTrain->bindParam(":id",$idPokemon);
        $heureDernierEntrainement = $canTrain->fetchColumn();
        $heureActuel = date("H:m:s");
        return $heureDernierEntrainement <= strtotime('-1 hour', strtotime($heureActuel)) ? true : false;
    }

    /**
     * Le pokemon s'entraine :
     * Met à jour la colonne heureEntrainement.
     *
     * @param $idPokemon
     * @return mixed
     */
    public static function setHeureEntrainement($idPokemon)
    {
        $heureEntrainement = 'now()';
        $monPdo = MonPdo::getInstance();
        $updateHeureEntrainement = $monPdo->prepare("UPDATE pokemon SET heureEntrainement = NOW() WHERE id = :id");
        //$updateHeureEntrainement->bindParam(":heureEntrainement",$heureEntrainement);
        $updateHeureEntrainement->bindParam(":id",$idPokemon);
        return $updateHeureEntrainement->execute();
    }
}