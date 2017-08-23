<?php

/**
 * Class DefaultControllerClass
 *
 * Classe de controlleur générique
 */
class DefaultControllerClass{
    /**
     * @var array Liste des actions interdites
     */
    public $actionsBlacklist=[];

    /**
     * DefaultControllerClass constructor.
     */
    public function __construct(){

    }

    /**
     * Index : liste des enregistrements
     */
    public function index(){

    }

    /**
     * Affichage d'un élément unique
     *
     * @param int $id Id de l'élément à afficher
     */
    public function view($id){

    }

    /**
     * Ajout d'un élément
     */
    public function add(){

    }

    /**
     * Edition d'un élément
     *
     * @param int $id Id de l'élément à modifier
     */
    public function edit($id){

    }

    /**
     * Suppression d'un élément
     *
     * @param int $id Id de l'élément à supprimer
     */
    public function delete($id){

    }

}
