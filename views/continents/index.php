<h1 class= "text-center">Liste des Continents</h1>

<a href="<?= PATH ?>/continents/ajout"><button type='button' class='btn btn-primary m-2 bi bi-plus-circle'>&nbsp;Ajouter</button></a><br>
<div id="zone-affichage" class="container-fluid text-center">
<table class="table table-hover">
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($continents as $continent) : ?>

        <tr>
            <td><?= $continent['ID_CONTINENT'] ?></td>
            <td><?= $continent['NOM_CONTINENT'] ?></td>
            <td>
                <a href="<?= PATH ?>/continents/modif/<?= $continent['ID_CONTINENT'] ?>"><button class="btn btn-success bi bi-pencil"></button></a>
                <a href="<?= PATH ?>/continents/suppr/<?= $continent['ID_CONTINENT'] ?>"><button class="btn btn-danger bi bi-trash3"></button></a>
            </td>
        </tr>

    <?php endforeach ?>

</table>

</div>