<?php

/**
 * Class DefaultModelClass
 *
 * Modèle générique
 */
class DefaultModelClass
{
    /**
     * @var array Liste des champs de la table
     */
    protected $fields = [];

    /**
     * @var array Liste des entités
     */
    protected $data = [];

    /**
     * @var string Nom de la table
     */
    protected $tableName = '';

    /**
     * @var string Entité liée
     */
    protected $entityName = '';

    /**
     * @var PDOStatement Connection SQL
     */
    protected $connection = null;

    /**
     * DefaultModelClass constructor.
     *
     * @param string $name Nom de la table
     * @param array $fields Liste des champs
     */
    public function __construct()
    {
        // Chargement de la classe d'entité correspondante.
        $entityFile = 'entities/' . $this->entityName . '.php';
        if (file_exists($entityFile)) {
            require_once($entityFile);
            $this->connection = DBClass::$connection;
        } else {
            die('Entité introuvable ('.$entityFile.')');
        }
    }

    /**
     * Récupère tous les enregistrements d'une table
     *
     * @return mysqli_result
     */
    public function findAll()
    {
        // Requête SQL
        $query = 'SELECT * FROM ' . $this->tableName;
        // Execution
        $results = $this->connection->query($query);

        // Création des entités
        foreach($results as $line){
            $this->data[] = new $this->entityName($line);
        }

        // Renvoi des resultats
        return $this->data;
    }
}










//