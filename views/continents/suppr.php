<h1>Suppression d'un Continent</h1>
<form action="<?= PATH ?>/continents/suppr_save/<?= $continents['ID_CONTINENT'] ?>" method="POST">
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="Id" placeholder="" name="Id" value=<?= $continents['ID_CONTINENT'] ?> readonly>
        <label for="Id">Code Continent</label>
    </div>
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="Nom" placeholder="" name="Nom" id="Nom" value=<?= $continents['NOM_CONTINENT'] ?> readonly>
        <label for="Nom">Nom Continent</label>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="<?= PATH ?>/continents"><button class="btn btn-warning">Retour à la liste</button></a>
</form>