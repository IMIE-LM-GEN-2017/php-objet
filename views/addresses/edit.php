<h1>Edition d'une adresse</h1>

<form action="?c=addresses&a=edit" method="POST">
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"
               class="form-control" value="<?= $results->nom ?>">
    </div>
    <div class="form-group">
        <label for="cp">CP :</label>
        <input type="text" name="cp" id="cp"
               class="form-control" value="<?= $results->cp ?>"><br>
    </div>
    <div class="form-group">
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville"
               class="form-control" value="<?= $results->ville ?>"><br>
    </div>
    <input type="hidden" name="id" value="<?= $results->id ?>">
    <button type="submit">Envoyer</button>
</form>