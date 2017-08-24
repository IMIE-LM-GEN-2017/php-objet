<?php

class HtmlHelper
{
    /**
     * Créée un lien adapté au "framework"
     *
     * @param string $controller Nom du controlleur
     * @param string$action Action a executer
     * @param string $title Titre du lien
     * @param array $options Liste d'options pour le lien
     * @return string
     */
    public static function link($controller, $action, $title, $options = [])
    {
        return '<a href="index.php?c=' . $controller . '&amp;a=' . $action . '">' . $title . '</a>';
    }

    /**
     * Créée un tableau à partir des résultats d'une requête SQL
     *
     * @param array $fieldNames Liste dse champs a afficher
     * @param mysqli $lines Lignes de résultats
     * @param string|null $controllerName Nom du controleur
     * @return string
     */
    public static function table(
        $fieldNames,
        $lines,
        $controllerName = null
    ) {
        // Création du tableau
        $table = '<table class="table">';
        // Création du header
        $table .= '<thead>';
        // Ligne du header
        $table .= '<tr>';
        if ($controllerName !== null) {
            $table .= '<th>Actions</th>';
        }
        foreach ($fieldNames as $field) {
            $table .= '<th>' . $field . '</th>';
        }
        $table .= '</tr>';
        $table .= '</thead>';
        // Ouverture du body
        $table .= '<tbody>';
        while ($line = mysqli_fetch_assoc($lines)) {
            $table .= '<tr>';
            if ($controllerName !== null) {
                $table .= '<td>';
                $table .= self::link($controllerName, 'delete', 'Supprimer');
                $table .= ' ';
                $table .= self::link($controllerName, 'edit', 'Editer');
                $table .= '</td>';
            }
            foreach ($fieldNames as $field) {
                $table .= '<td>' . $line[$field] . '</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</tbody>';
        $table .= '</table>';

        // Renvoi du tableau
        return $table;
    }
}





















//