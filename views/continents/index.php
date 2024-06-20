<h1 class= "text-center">Liste des Continents</h1>


<div class='row'><div class='col-md-3 col-12 mb-2'><a href="<?= PATH ?>/continents/ajout"><button type='button' class='btn btn-primary col-12 bi bi-plus-circle'>&nbsp;Ajouter</button></a></div> <div class='col-md-9 col-12'><input type='search' class=' form-control col-12' id='search' placeholder='Recherche...'name='search'></div></div><br>
<div id="zone-affichage" class="container-fluid text-center">
<table class="table table-hover">
    <thead>
    <tr>
        <th>CODE</th>
        <th>NOM</th>
        <th>ACTIONS</th>
    </tr>
    </thead>
    <tbody id="table">

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
    </tbody>
</table>
<script>Search();</script>
</div>