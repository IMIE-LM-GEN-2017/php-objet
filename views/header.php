<!doctype HTML>
<html>
<head>
    <title></title>
</head>
<body>
<?= HtmlHelper::link('pages', 'home', 'Accueil')?>
<?= HtmlHelper::link('pages', 'about', 'A propos')?>

| Adresses :
<?= HtmlHelper::link('addresses', 'index', 'Liste')?>
<?= HtmlHelper::link('addresses', 'add', 'Créer')?>
<hr>
