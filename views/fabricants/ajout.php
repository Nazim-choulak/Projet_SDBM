<h1 class= "text-center">Ajouter un fabricant</h1>

<form action="<?= PATH ?>/fabricants/ajout_save" method="post">
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="Nom" placeholder="" name="Nom">
        <label for="Nom">Nom Fabricant</label>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="<?= PATH ?>/fabricants"><button class="btn btn-warning">Retour à la liste</button></a>
</form><br>
