<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 29/03/2018
 * Time: 22:24
 */

class CompteModel
{
    /**
     * @var $id l'id de l'utilisateur.
     */
    protected $id;
    /**
     * @var $nom le nom de l'utilisateur.
     */
    protected $nom;
    /**
     * @var $prenom le prénom de l'utilisateur
     */
    protected $prenom;
    /**
     * @var l'adresse email de l'utilisateur
     */
    protected $mail;
    /**
     * @var le mot de pass de l'utilisateur
     */
    protected $password;
    /**
     * @var $solde le solde de l'utilisateur.
     */
    protected $solde;
    /**
     * @var $level le niveau de l'utilisateur.
     */
    protected $level;
    /**
     * @var $experience l'experience nécessaire.
     */
    protected $experience;
    /**
     * @var $pseudo le pseudo de l'utlisateur.
     */
    protected $pseudo;
    /**
     * @var $arrayPokemon Array de pokemon.
     */
    protected $arrayPokemon;
    /**
     * compteModel constructor.
     */
    public function __construct()
    {
        $this->setSolde(5000);
        $this->arrayPokemon = array();
    }


    /**
     * Serialize la class compte.
     * Renvoie un serialise sur ID, Level, Solde & Pseudo.
     */
    public function serialize()
    {
        return serialize(array(
            $this->getId(),
            $this->getLevel(),
            $this->getSolde(),
            $this->getPseudo()
        ));
    }


    /**
     * Méthode de la classe compteModel.
     *
     * @return string
     */
    public function __toString()
    {
        return "ID : ".$this->id." Nom : ".$this->nom." Prenom : ".$this->prenom." Mail : ".$this->mail." Solde : ".$this->solde;
    }

    /************************************************************************************
     *                                   Mutateurs
     ************************************************************************************/

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
     * @return le
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param le $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return le
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param le $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return le
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param le $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return le
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param le $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
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
     * @return le
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param le $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return array
     */
    public function getArrayPokemon()
    {
        return $this->arrayPokemon;
    }

    /**
     * @param array $arrayPokemon
     */
    public function setArrayPokemon($arrayPokemon)
    {
        $this->arrayPokemon = $arrayPokemon;
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


}