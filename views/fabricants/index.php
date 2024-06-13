<h1 class= "text-center">Liste des Fabricants</h1>

<a href="<?= PATH ?>/fabricants/ajout"><button type='button' class='btn btn-primary m-2 bi bi-plus-circle'>&nbsp;Ajouter</button></a>
<div id="zone-affichage" class="container-fluid text-center">
<table class="table table-hover">
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($fabricants as $fabricant) : ?>

        <tr>
            <td><?= $fabricant['ID_FABRICANT'] ?></td>
            <td><?= $fabricant['NOM_FABRICANT'] ?></td>
            <td>
                <a href="<?= PATH ?>/fabricants/modif/<?= $fabricant['ID_FABRICANT'] ?>"><button class="btn btn-success bi bi-pencil"></button></a>
                <a href="<?= PATH ?>/fabricants/suppr/<?= $fabricant['ID_FABRICANT'] ?>"><button class="btn btn-danger bi bi-trash3"></button></a>
            </td>
        </tr>

    <?php endforeach ?>

</table>
</div>