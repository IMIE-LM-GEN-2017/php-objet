<?php
/*
 * Chargement des différents fichiers nécessaires
 */
require_once 'vendor/autoload.php';

use Studio321\Classes\DBClass;

/*
 * Connexion à la base de données
 */
DBClass::connect();

/*
 * Valeurs par défaut
 */
$controller = 'addresses';
$action = 'index';

/*
 * Choix du controleur suivant la valeur 'c' de la querystring
 */
if (isset($_GET['c']) && !empty($_GET['c'])) {
    $controller = $_GET['c'];
}
/*
 * Choix de l'action
 */
if (isset($_GET['a']) && !empty($_GET['a'])) {
    $action = $_GET['a'];
}

/*
 * Détermination du "nom" du controleur que l'on veut charger:
 */
$controllerNamespace = 'Studio321\\Controller\\' . ucfirst($controller) . 'Controller';
// Création d'une instance de ce controleur
$controllerInstance = new $controllerNamespace();

// Résultats renvoyés par l'action du controleur
$results = $controllerInstance->$action();

/*
 * On prépare la vue
 */
$fichierVue = "views/$controller/$action.php";

// Si la vue existe, on continue
if (file_exists($fichierVue)) {
    /*
     * On affiche l'ensemble
     */
    include 'views/header.php';
    include $fichierVue;
    include 'views/footer.php';
} else {
    die('500 - Vue non trouvée (' . $fichierVue . ')');
}
















