<?php

namespace Studio321\Controller;

use Studio321\Model\DefaultModelClass;

/**
 * Class DefaultControllerClass
 *
 * Classe de controlleur générique
 */
class DefaultControllerClass
{
    /**
     * Action d'index qui renverra la liste des
     * adresses
     */
    public function index()
    {
        $modelClass= 'Studio321\\Model\\'.$this->modelName;
        $model = new $modelClass();
        $liste = $model->findAll();
        return $liste;
    }
}
