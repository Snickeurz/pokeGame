<?php

class loginModel
{
    public static function checkUser($mail, $pass)
    {
        $monPdo = MonPdo::getInstance();
        $check = $monPdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $check->bindParam(":email",$mail,PDO::PARAM_STR);
        $check->bindParam(":password",$pass,PDO::PARAM_STR);
        $check->execute();
        return $check->fetch();
    }

    public static function inscription($nom, $prenom, $pseudo, $tel, $email, $pass)
    {
        $monPdo = MonPdo::getInstance();
        $insert = $monPdo->prepare("INSERT INTO users(nom, prenom, pseudo, telephone, email, password) VALUES (:nom, :prenom, :pseudo, :telephone, :email, :password)");
        $insert->bindParam(":nom",$nom,PDO::PARAM_STR);
        $insert->bindParam(":prenom",$prenom,PDO::PARAM_STR);
        $insert->bindParam(":pseudo",$pseudo,PDO::PARAM_STR);
        $insert->bindParam(":telephone",$tel,PDO::PARAM_STR);
        $insert->bindParam(":email",$email,PDO::PARAM_STR);
        $insert->bindParam(":password",$pass,PDO::PARAM_STR);
        return $insert->execute();
    }
}
?>