<?php

class HtmlHelper
{
    /**
     * Créée un lien adapté au "framework"
     *
     * @param $controller Nom du controlleur
     * @param $action Action a executer
     * @param $title Titre du lien
     * @param array $options Liste d'options pour le lien
     * @return string
     */
    public static function link($controller, $action, $title, $options = [])
    {
        return '<a href="index.php?c=' . $controller . '&amp;a=' . $action . '">' . $title . '</a>';
    }
}