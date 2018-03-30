<?php

/**
 * Class pokemonModel.
 * Définit un pokémon.
 */
class PokemonModel
{
    /**
     * @var $id l'id du pokemon.
     */
    protected $id;
    /**
     * @var $espece l'espece du pokemon.
     */
    protected $espece;
    /**
     * @var le level du pokemon.
     */
    protected $level;
    /**
     * @var $experience l'experience nécessaire pour le prochain level.
     */
    protected $experience;
    /**
     * @var $type1 l'élement 1 du pokémon.
     */
    protected $type1;
    /**
     * @var $type2 l'élement 2 du pokémon.
     */
    protected $type2;
    /**
     * @var $sexe Le sexe du pokémon.
     */
    protected $sexe;
    /**
     * @var $prixVente Le prix de vente du pokémon.
     */
    protected $prixVente;
    /**
     * @var la vie du pokemon.
     */
    protected $vie;


    /**
     * compteModel constructor.
     */
    public function __construct()
    {
    }

    /**
     * Méthode toString de la classe pokemon.
     * @return string
     */
    public final function toString()
    {
        return  "ID : ".$this->getId()." Espece : ".$this->getEspece()." Level : ".$this->getLevel()." Experience : ".$this->getExperience()." Type 1 : ".$this->getType1().
            " Type 2 :".$this->getType2()."Sexe :".$this->getSexe()." Prix vente : ".$this->getPrixVente()." Vie :".$this->getVie();
    }

    /*************************************************
     *                     mutators.
     **************************************************/

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * @param mixed $espece
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;
    }

    /**
     * @return le
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param le $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getType1()
    {
        return $this->type1;
    }

    /**
     * @param mixed $type1
     */
    public function setType1($type1)
    {
        $this->type1 = $type1;
    }

    /**
     * @return mixed
     */
    public function getType2()
    {
        return $this->type2;
    }

    /**
     * @param mixed $type2
     */
    public function setType2($type2)
    {
        $this->type2 = $type2;
    }

    /**
     * @return Le
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param Le $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return Le
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * @param Le $prixVente
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;
    }

    /**
     * @return la
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * @param la $vie
     */
    public function setVie($vie)
    {
        $this->vie = $vie;
    }

}
?>