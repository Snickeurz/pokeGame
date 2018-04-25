<?php

class loginModel
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
        $check = $monPdo->prepare("SELECT id FROM users WHERE email = :email AND password = :password");
        $check->bindParam(":email",$mail,PDO::PARAM_STR);
        $check->bindParam(":password",$pass,PDO::PARAM_STR);
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
        $monPdo = MonPdo::getInstance();
        $insert = $monPdo->prepare("INSERT INTO users(nom, prenom, pseudo, telephone, email, password, new_user) VALUES (:nom, :prenom, :pseudo, :telephone, :email, :password, :new_user)");
        $insert->bindParam(":nom",$nom,PDO::PARAM_STR);
        $insert->bindParam(":prenom",$prenom,PDO::PARAM_STR);
        $insert->bindParam(":pseudo",$pseudo,PDO::PARAM_STR);
        $insert->bindParam(":telephone",$tel,PDO::PARAM_STR);
        $insert->bindParam(":email",$email,PDO::PARAM_STR);
        $insert->bindParam(":password",$pass,PDO::PARAM_STR);
        $insert->bindParam(":new_user",true,PDO::PARAM_BOOL);
        return $insert->execute();
    }
}
?>