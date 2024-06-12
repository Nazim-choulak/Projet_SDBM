<h1>Ajouter un continent</h1>

<form action="<?= PATH ?>/continents/ajout_save" method="post">
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="Nom" placeholder="" name="Nom">
        <label for="Nom">Nom Continent</label>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="<?= PATH ?>/continents"><button class="btn btn-warning">Retour à la liste</button></a>
</form><br>
