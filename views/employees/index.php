<h1>Liste des employes</h1>
<?= HtmlHelper::link('employees', 'add', 'Nouveau employe') ?>
<hr>
<?php
// Les résultats sont disponibles dans la
// variable $resultats
if (mysqli_num_rows($resultats) === 0) {
    echo "Pas de résultats";
} else {
    echo HtmlHelper::table([
        'id',
        'nom',
        'prenom',
        'id_adresse',
        'id_ferme',
    ], $resultats, 'employees');
}