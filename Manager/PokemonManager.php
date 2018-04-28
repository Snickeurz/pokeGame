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
        $id = $monPdo->prepare("SELECT id from pokemon WHERE nom = :libelle");
        $id->bindParam(":libelle", $libelle);
        $id->execute();
        return $id->fetchColumn();
    }

}