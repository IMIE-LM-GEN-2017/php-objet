<h1>Création d'une adresse</h1>


<form action="<?= HtmlHelper::url('addresses', 'add') ?>"
      method="POST">
    Nom :
    <input type="text" name="nom"><br>
    CP :
    <input type="text" name="cp"><br>
    Champ fantome :
    <input type="text" name="cqsdqsdp"><br>
    Ville :
    <input type="text" name="ville"><br>
    <button type="submit">Envoyer</button>
</form>