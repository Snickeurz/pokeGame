<?php


class CompteManager
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
            $informations = $monPdo->prepare("SELECT id, nom, prenom, pseudo, telephone, email, xp, lvl, solde FROM users WHERE id = :id");
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
                $compte->setExperience($info["xp"]);
                $compte->setLevel($info["lvl"]);
                $compte->setSolde($info["solde"]);
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
        $listePokemonPossede = $monPdo->prepare("SELECT arrayPokemon FROM users WHERE id = :id");
        $listePokemonPossede->bindParam(":id", $id, PDO::PARAM_INT);
        $listePokemonPossede->execute();
        return $listePokemonPossede->fetchColumn();
    }

    /**
     * Met à jour l'xp du compte.
     *
     * @param $xp
     * @return true | false
     */
    public function gainExp($xp)
    {
        $monPdo = MonPdo::getInstance();
        $updateXP = $monPdo->prepare("UPDATE users SET xp = :xp");
        $updateXP->bindParam(":xp", $xp);
        return $updateXP->execute();
    }

    /**
     * Détermine si nouveau utilisateur.
     *
     * @param int $id l'id de l'utilisateur
     * @return boolean true si premiere connexion sinon false
     */
    public static function isNewUser($id)
    {
        $monPdo = MonPdo::getInstance();
        $isNewUser = $monPdo->prepare("SELECT new_user FROM users WHERE id = :id");
        $isNewUser->bindParam(":id", $id, PDO::PARAM_INT);
        $isNewUser->execute();
        return $isNewUser->fetchColumn();
    }

    /**
     * Met à jour le starter du dresseur.
     *
     * @param int $id id de l'utilisateur
     * @param string $starter le nom du pokemon choisit en starter
     * @return mixed
     */
    public static function setStarter($starter,$id, $idPokemon)
    {
        $new_user = false;
        $monPdo = MonPdo::getInstance();
        $setStarter = $monPdo->prepare("UPDATE users SET starter = :starter, new_user = :new_user, arrayPokemon = concat(arrayPokemon, :idPokemon) WHERE id = :id");
        $setStarter->bindParam(":starter", $starter, PDO::PARAM_STR);
        $setStarter->bindParam(":new_user", $new_user, PDO::PARAM_BOOL);
        $setStarter->bindParam(":idPokemon", $idPokemon, PDO::PARAM_INT);
        $setStarter->bindParam(":id", $id, PDO::PARAM_INT);
        return $setStarter->execute();
    }

    /**
     * Récupère le starter choisit
     *
     * @param int $id
     * @return string || false
     */
    public static function getStarter($id)
    {
        $monPdo = MonPdo::getInstance();
        $getStarter = $monPdo->prepare("SELECT starter FROM users WHERE id = :id");
        $getStarter->bindParam(":id",$id);
        $getStarter->execute();
        return $getStarter->fetchColumn();
    }


    /**
     * Rajoute un pokemon dans la liste des pokémons possédé.
     *
     * @param int $idDresseur
     * @param int $idPokemon
     * @return mixed
     */
    public static function addPokemonPossede($idDresseur, $idPokemon)
    {
        $monPdo = MonPdo::getInstance();
        $setStarter = $monPdo->prepare("UPDATE users SET arrayPokemon = concat(arrayPokemon, :idPokemon) WHERE id = :id");
        $setStarter->bindParam(":idPokemon", $idPokemon, PDO::PARAM_INT);
        $setStarter->bindParam(":id", $idDresseur, PDO::PARAM_INT);
        return $setStarter->execute();
    }

}