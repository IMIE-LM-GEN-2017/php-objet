<?php

namespace Studio321\Model;

use Studio321\Model\DefaultModelClass;

/**
 * Class AddressesModel
 *
 * Modèle pour la table "adresses"
 */
class AddressesModel extends DefaultModelClass
{
    /**
     * @var array Liste des champs
     */
    public $fields = ['id', 'nom', 'cp', 'ville'];
    /**
     * @var string Nom de la table dans la base
     */
    public $tableName = 'adresses';

    /**
     * @var string Entité liée
     */
    protected $entityName = 'AddressEntity';
}














