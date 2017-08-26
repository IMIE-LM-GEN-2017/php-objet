<h1>Liste des adresses</h1>
<?php foreach ($results as $adresse) : ?>
    <a href="?c=addresses&a=edit&id=<?= $adresse->id ?>">Editer</a>
    <dl class="dl-horizontal">
        <dt>id</dt>
        <dd><?= $adresse->id ?></dd>
        <dt>nom</dt>
        <dd><?= $adresse->nom ?></dd>
        <dt>cp</dt>
        <dd><?= $adresse->cp ?></dd>
        <dt>ville</dt>
        <dd><?= $adresse->ville ?></dd>
    </dl>
    <hr>
<?php endforeach; ?>