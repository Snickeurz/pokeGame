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
     * @var int $vie
     * la vie du pokemon.
     */
    protected $vie;
    /**
     * @var bool $evolution true si il peut évoluer sinon false
     */
    protected $evolution;

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
        return  " Sexe : ".$this->getSexe()."<br> Vie : ".$this->getVie()."<br> Level : ".$this->getLevel()." Experience : ".$this->getExperience()." <br>Type 1 : ".$this->getType1().
            " Type 2 : ".$this->getType2();
    }

    /*************************************************
     *                     mutators.
     **************************************************/

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * @param string $espece
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
        $sexe ="";
        if($this->sexe)
        {
            $sexe = "mâle";
        }
        else
        {
            $sexe = "femelle";
        }
        return $sexe;
    }

    /**
     * @param boolean $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
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

    /**
     * @return bool
     */
    public function isEvolution()
    {
        return $this->evolution;
    }

    /**
     * @param bool $evolution
     */
    public function setEvolution($evolution)
    {
        $this->evolution = $evolution;
    }

}