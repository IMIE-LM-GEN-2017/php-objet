<?php

namespace Studio321\Model;

use Studio321\Classes\DBClass;

/**
 * Class DefaultModelClass
 *
 * Modèle générique
 */
class DefaultModelClass
{
    public $tableName = '';

    public function findAll()
    {

        $connection = DBClass::$connection;

        $requeteSQL = "SELECT * FROM " . $this->tableName;

        $results = $connection->query($requeteSQL);

        return $results;
    }
}
