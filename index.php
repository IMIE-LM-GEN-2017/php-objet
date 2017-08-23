<?php

require_once 'includes.php';

/**
 * Défauts
 */
$controleur = 'pages';
$action = 'home';

/**
 * Choix du controleur
 */
if (isset($_GET['c']) && !empty($_GET['c'])) {
    $controleur = $_GET['c'];
}
/**
 * Choix de l'action
 */
if (isset($_GET['a']) && !empty($_GET['a'])) {
    $action = $_GET['a'];
}

echo "Controleur : $controleur, Action : $action";

// Création du "nom" du controleur que l'on veut charger:
$nomControleur = ucfirst($controleur) . 'Controller';
$fichierControleur = 'controllers/' . $nomControleur . '.php';
echo "<p>On veut charger $nomControleur</p>";

if (file_exists($fichierControleur)) {
    require_once($fichierControleur);
} else {
    die('404 - Controleur introuvable (' . $fichierControleur . ')');
}












//