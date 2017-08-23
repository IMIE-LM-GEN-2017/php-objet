<?php
/*
 * Chargement des différents fichiers nécessaires
 */
require_once 'includes.php';

/*
 * Connexion à la base de données
 */
DBClass::connect();

/*
 * Valeurs par défaut
 */
$controller = 'pages';
$action = 'home';

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
$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = 'controllers/' . $controllerName . '.php';

/*
 * Tentative de chargement du controlleur:
 * Test de l'existence du fichier
 */
if (file_exists($controllerFile)) {
    require_once($controllerFile);

    // Création d'une instance de ce controleur
    $finalController = new $controllerName();

    // Test de l'existence de la méthode (action) dans le controlleur.
    // La méthode ne doit pas être blacklistée.
    if (method_exists($finalController, $action)
        && !in_array($action, $finalController->actionsBlacklist)
    ) {
        $resultats = $finalController->$action();

        /*
         * On prépare la vue
         */
        $fichierVue = 'views/'
            . $controller
            . '/'
            . $action . '.php';

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
    } else {
        die('404 - Action introuvable ('
            . $controllerName
            . '::'
            . $action . ')');
    }

} else {
    die('404 - Controleur introuvable ('
        . $controllerFile
        . ')');
}
