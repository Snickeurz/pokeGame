<?php


class compteManager
{
    /**
     * Récupère les informations d'un compte en fonction d'un id.
     *
     * Pour chaque ligne trouvé, instancier un objet de classe MarketModel et le push dans un array de Collection.
     * @param int $id l'id du dresseur à récupérer
     * @return object $compte un compte
     */
    public static function constructCompteFromDB($id)
    {
        $monPdo = MonPdo::getInstance();
        $compte = new CompteModel();
        try
        {
            $informations = $monPdo->prepare("SELECT id, nom, prenom, pseudo, telephone, email FROM users WHERE id = :id");
            $informations->bindParam(":id", $id, PDO::PARAM_INT);
            $informations->execute();

            while ($info = $informations ->fetch(PDO::FETCH_ASSOC))
            {
                $compte->setId($info["id"]);
                $compte->setNom($info["nom"]);
                $compte->setPrenom($info["prenom"]);
                $compte->setPseudo($info["pseudo"]);
                $compte->setTelephone($info["telephone"]);
                $compte->setMail($info["email"]);
            }
        }
        catch (\Exception $e)
        {
            $e->getMessage();
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

    /**
     * Met à jour l'xp du compte.
     *
     * @param $xp
     * @return mixed
     */
    public function gainExp($xp)
    {
        $compte = new CompteModel();
        $monPdo = MonPdo::getInstance();

        $compte->setExperience($xp);
        $updateXP = $monPdo->prepare("UPDATE users SET xp = :xp");
        $updateXP->bindParam(":xp", $xp);
        return $updateXP->execute();
    }


}