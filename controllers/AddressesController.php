<?php

namespace Studio321\Controller;

use Studio321\Model\AddressesModel;

class AddressesController extends DefaultControllerClass
{

    public $modelName = 'AddressesModel';

    /**
     * Action qui va gérer un formulaire
     */
    public function add()
    {
        $model = new AddressesModel();
        $model->save($_POST);
    }

    public function edit()
    {

        $id = null;

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } elseif (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Rien a éditer');
        }


        $model = new AddressesModel();
        if (count($_POST)) {
            $model->update($_POST);
            return (object)$_POST;
        } else {
            $adresse = $model->findOne($id);
        }

        return $adresse->fetch();
    }
}








//