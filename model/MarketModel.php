<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 22:24
 */

class MarketModel
{
    /**
     * @var int $idAnnonce l'id de l'annonce
     */
    protected $idAnnonce;
    /**
     * @var string $vendeur le nom du vendeur
     */
    protected $vendeur;
    /**
     * @var string $pokemon le nom du pokemon à vendre
     */
    protected $pokemon;
    /**
     * @var int $prix le prix du pokemon a vendre
     */
    protected $prix;
    /**
     * @var string $description la description de l'annonce
     */
    protected $description;
    /**
     * @var dateTime $date la date de l'annonce
     */
    protected $date;

    /**
     * MarketModel's constructor.
     *
     * @param int $idAnnonce l'id de l'annonce
     * @param string $vendeur le nom du vendeur
     * @param string $pokemon le nom du pokemon
     * @param int $prix le prix du pokemon
     * @param string $description la description de l'annonce
     * @param DateTime $date la date de l'annonce
     */
    public function __construct($idAnnonce, $vendeur, $pokemon, $prix, $description, $date)
    {
        $this->setIdAnnonce($idAnnonce);
        $this->setVendeur($vendeur);
        $this->setPokemon($pokemon);
        $this->setPrix($prix);
        $this->setDescription($description);
        $this->setDate($date);
    }

    /**
     * @return string une description humainement compréhensible de la classe MarketModel
     */
    public function __toString()
    {
        return "ID : ".$this->getIdAnnonce()."\nVendeur : ".$this->getVendeur()."\nPokemon : ".$this->getPokemon()."\nPrix : ".$this->getPrix()."\nDescription : ".$this->getDescription()."\nDate : ".$this->getDate();
    }

    /************************************
     *              MUTATORS            *
     ************************************/

    /**
     * @return int
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * @param int $idAnnonce
     */
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;
    }

    /**
     * @return string
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * @param string $vendeur
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;
    }

    /**
     * @return string
     */
    public function getPokemon()
    {
        return $this->pokemon;
    }

    /**
     * @param string $pokemon
     */
    public function setPokemon($pokemon)
    {
        $this->pokemon = $pokemon;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

}