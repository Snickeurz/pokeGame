<?php

/**
 * Class pokemonModel.
 * Définit un pokémon.
 */
class PokemonModel
{
    /**
     * @var int $id l'id du pokemon.
     */
    protected $id;
    /**
     * @var string $espece l'espece du pokemon.
     */
    protected $espece;
    /**
     * @var int $level le level du pokemon.
     */
    protected $level;
    /**
     * @var int $experience l'experience nécessaire pour le prochain level.
     */
    protected $experience;
    /**
     * @var int $type1 l'élement 1 du pokémon.
     */
    protected $type1;
    /**
     * @var int $type2 l'élement 2 du pokémon.
     */
    protected $type2;
    /**
     * @var boolean $sexe Le sexe du pokémon.
     */
    protected $sexe;
    /**
     * @var int $prixVente Le prix de vente du pokémon.
     */
    protected $prixVente;
    /**
     * @var int $vie
     * la vie du pokemon.
     */
    protected $vie;


    /**
     * PokemonModel's constructor.
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
     * @return int $this->level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return int $this->experience
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return int $this->type1
     */
    public function getType1()
    {
        return $this->type1;
    }

    /**
     * @param int $type1
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
     * @return boolean
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param boolean $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return int $this->prixVente
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * @param int $prixVente
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;
    }

    /**
     * @return int $this->vie
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * @param int $vie
     */
    public function setVie($vie)
    {
        $this->vie = $vie;
    }

}