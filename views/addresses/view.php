<?php
use Studio321\Classes\HtmlHelper;

?>
<h1>Affichage d'une adresse</h1>
<div class="row">
    <div class="col-sm-3">
        <div class="btn-group btn-group-xs">
            <?= HtmlHelper::link('addresses', 'edit', HtmlHelper::icon('pencil', 'Editer'),
                ['options' => ['id' => $resultats['data']->id], 'class' => 'btn btn-primary']) ?>
            <?= HtmlHelper::link('addresses', 'delete', HtmlHelper::icon('trash', 'Supprimer'),
                ['options' => ['id' => $resultats['data']->id], 'class' => 'btn btn-danger']) ?>
        </div>
        <h2>Informations</h2>
        <dl>
            <dt>Id :</dt>
            <dd><?= $resultats['data']->id ?></dd>
            <dt>Nom :</dt>
            <dd><?= $resultats['data']->nom ?></dd>
            <dt>CP :</dt>
            <dd><?= $resultats['data']->cp ?></dd>
            <dt>Ville :</dt>
            <dd><?= $resultats['data']->ville ?></dd>
        </dl>
    </div>
    <div class="col-sm-9">
        <h2>Données liées</h2>
        <?php foreach ($resultats['relations'] as $name => $data): ?>
            <h3><?= $name ?></h3>
            <?php if (count($data) > 0): ?>
                <?= HtmlHelper::table($data['fields'], $data['data'], $name) ?>
            <?php else: ?>
                <?= HtmlHelper::alert('info', 'Aucun enregistrement lié') ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
