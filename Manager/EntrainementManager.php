<?php

class EntrainementManager
{
    /**
     * Permet de récupérer les lieux de combat disponible.
     *
     * @return array de $lieux
     */
    public static function getLieux()
    {
        $monPdo = MonPdo::getInstance();
        $lieux = $monPdo->prepare("SELECT id, lieu FROM lieux");
        $lieux->execute();
        return $lieux->fetchAll();
    }

    /**
     * Choisit un pokemon aléatoirement dans la liste CSV.
     *
     * @return array information de pokemon
     */
    public static function getRandomPokemonFromCSV()
    {
        $randomLigne = rand(2,152);
        $stop = false;
        $row = 1;
        $arrayPokemon = array();

        if (($handle = fopen("pokemon.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE && $stop == false) {
                if($row==$randomLigne)
                {
                    for ($c=0; $c < count($data); $c++) {
                       array_push($arrayPokemon, $data[$c]);
                    }
                    $stop=true;
                }else
                {
                    $row++;
                }
            }
            fclose($handle);
        }
        return $arrayPokemon;
    }
}
