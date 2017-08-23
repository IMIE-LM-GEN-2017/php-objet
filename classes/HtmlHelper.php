<?php

class HtmlHelper
{
    /**
     * Créée un lien adapté au "framework"
     *
     * @param $controleur Nom du controlleur
     * @param $action Action a executer
     * @param $titre Titre du lien
     * @param array $options Liste d'options pour le lien
     * @return string
     */
    public static function link(
        $controleur,
        $action,
        $titre,
        $options = []
    ) {
        return '<a href="index.php?c=' . $controleur
            . '&amp;a=' . $action . '">'
            . $titre . '</a>';
    }
}