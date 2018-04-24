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
     * @var string $nom le nom de l'utilisateur.
     */
    protected $nom;
    /**
     * @var string $prenom le prénom de l'utilisateur.
     */
    protected $prenom;
    /**
     * @var string $mail l'adresse email de l'utilisateur.
     */
    protected $mail;
    /**
     * @var string $telephone Le numéro de telephone de l'utilsiateur.
     */
    protected $telephone;
    /**
     * @var string $password le mot de pass de l'utilisateur.
     */
    protected $password;
    /**
     * @var int $solde le solde de l'utilisateur.
     */
    protected $solde;
    /**
     * @var $level int le niveau de l'utilisateur.
     */
    protected $level;
    /**
     * @var int $experience l'experience nécessaire.
     */
    protected $experience;
    /**
     * @var string $pseudo le pseudo de l'utlisateur.
     */
    protected $pseudo;
    /**
     * @var array $arrayPokemon la liste des pokémons possédé.
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
            $this->getPseudo(),
            $this->getNom(),
            $this->getPrenom(),
            $this->get(),
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
     * @return int $this->id
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
     * @return string $this->nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string $this->prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string $this->mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return string $this->password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int $this->solde
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param int $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
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
     * @return string $this->pseudo
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
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
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }



}