<?php

class LoginModel
{
    /**
     * Méthode utilitaire pour vérifier l'authentification.
     *
     * @param string $mail l'adresse email du formulaire de connexion.
     * @param string $pass le mot de passe du formulaire de connexion.
     * @return mixed le résultat trouvé.
     */
    public static function checkUser($mail, $pass)
    {
        $monPdo = MonPdo::getInstance();
        $check = $monPdo->prepare("SELECT id FROM users WHERE email = :email AND pass = :pass");
        $check->bindParam(":email",$mail,PDO::PARAM_STR);
        $check->bindParam(":pass",$pass,PDO::PARAM_STR);
        $check->execute();
        return $check->fetchColumn();
    }

    /**
     * Méthode utilitaire pour une nouvelle inscription.
     *
     * @param string $nom le nom de l'utilisateur.
     * @param string $prenom le prénom de l'utilisateur.
     * @param string $pseudo le pseudo de l'utilisateur.
     * @param string $tel le numéro de téléphone fournit.
     * @param string $email l'adresse email.
     * @param string $pass le mot de passe.
     * @return mixed L'état de l'insertion.
     */
    public static function inscription($nom, $prenom, $pseudo, $tel, $email, $pass)
    {
        $new_user = '1';
        $solde = 5000;
        $xp = 0;
        $lvl = 1;
        $monPdo = MonPdo::getInstance();
        $insert = $monPdo->prepare("INSERT INTO users (nom, prenom, pseudo, telephone, email, pass, xp, lvl, solde, new_user, starter, arrayPokemon)
 VALUES (:nom, :prenom, :pseudo, :telephone, :email, :pass, :xp, :lvl, :solde, :new_user, :starter, :arrayPokemon)");
        $insert->bindValue(":nom",$nom,PDO::PARAM_STR);
        $insert->bindValue(":prenom",$prenom,PDO::PARAM_STR);
        $insert->bindValue(":pseudo",$pseudo,PDO::PARAM_STR);
        $insert->bindValue(":telephone",$tel,PDO::PARAM_STR);
        $insert->bindValue(":email",$email,PDO::PARAM_STR);
        $insert->bindValue(":pass",$pass,PDO::PARAM_STR);
        $insert->bindValue(":xp",$xp,PDO::PARAM_INT);
        $insert->bindValue(":lvl",$lvl,PDO::PARAM_INT);
        $insert->bindValue(":solde",$solde,PDO::PARAM_INT);
        $insert->bindValue(":new_user",$new_user,PDO::PARAM_BOOL);
        $insert->bindValue(":starter","",PDO::PARAM_STR);
            $insert->bindValue(":arrayPokemon","",PDO::PARAM_STR);
        return $insert->execute();
    }
}
?>