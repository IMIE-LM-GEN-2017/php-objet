<?php

namespace Studio321\Model;

use Studio321\Classes\DBClass;

/**
 * Class AddressesModel
 *
 * Modèle pour la table "adresses"
 */
class AddressesModel extends DefaultModelClass
{

    public $tableName = 'adresses';

    public function save($data)
    {
        $connection = DBClass::$connection;
        // INSERT INTO adresses (nom, cp, ville)
        // VALUES ('La ferme de TOTO', '72000', 'Le Mans')
        $requeteSQL = "INSERT INTO ".$this->tableName
            ." ( nom, cp, ville )"
            . " VALUES (:nom, :cp, :ville)";

        var_dump($requeteSQL);die;

        $resultat = $connection->prepare($requeteSQL);
        $resultat->bindParam(':nom', $data['nom']);
        $resultat->bindParam(':cp', $data['cp']);
        $resultat->bindParam(':ville', $data['ville']);

        if ($resultat->execute()) {
            return true;
        } else {
            die('Erreur');
        }

    }


    public function findOne($idAdresse)
    {
        $connection = DBClass::$connection;

        $requeteSQL = "SELECT * FROM adresses WHERE id=:idA";
        $resultats = $connection->prepare($requeteSQL);
        $resultats->bindParam(':idA', $idAdresse);

        if ($resultats->execute()) {
            return $resultats;
        } else {
            die('ERREUR');
        }
    }


    public function update($donnees)
    {
        $connection = DBClass::$connection;

        $requeteSQL = 'UPDATE adresses SET nom=:nomAdd, cp=:cpAdd, ville=:villeAdd'
            . ' WHERE id=:superId';
        $resultats = $connection->prepare($requeteSQL);
        $resultats->bindParam(':nomAdd', $donnees['nom']);
        $resultats->bindParam(':cpAdd', $donnees['cp']);
        $resultats->bindParam(':villeAdd', $donnees['ville']);
        $resultats->bindParam(':superId', $donnees['id']);

        if ($resultats->execute()) {
            return true;
        } else {
            die('ERREUR');
        }
    }


    //

}
