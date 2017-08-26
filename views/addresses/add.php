<h1>Création d'une adresse</h1>

<?php var_dump($results) ?>

<form action="?c=addresses&a=add" method="POST">
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="cp">CP :</label>
        <input type="text" name="cp" id="cp" class="form-control"><br>
    </div>
    <div class="form-group">
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville" class="form-control"><br>
    </div>
    <button type="submit">Envoyer</button>
</form>