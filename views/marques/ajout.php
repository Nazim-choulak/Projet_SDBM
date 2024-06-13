<h1 class= "text-center">Ajout d'une Marque</h1>
<?php print_r($_REQUEST['Id_fabricant']) ?>
<form action="<?= PATH ?>/marques/ajout_save" method="POST">
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-select" placeholder="" name="Nom" id="Nom" />
        <label for="Nom">Nom Marque</label>
    </div>
    <div class="form-floating mb-3 mt-3">
        <label for="Nom">Fabricant</label>
        <select name="Id_fabricant" id="Id_fabricant" class="form-select" />
        <option value="NULL">NULL</option>
        <?php foreach ($fabricants as $fabricant) : ?>
            <option value=<?= $fabricant['ID_FABRICANT'] ?>><?= $fabricant['NOM_FABRICANT'] ?></option>
        <?php endforeach ?>
        </select>
    </div>
    <div class="form-floating mb-3 mt-3">
        <label for="Nom">Pays</label>
        <select name="Id_pays" id="Id_pays" class="form-select" />
        <?php foreach ($pays as $UnPays) : ?>
            <option value=<?= $UnPays['ID_PAYS'] ?>><?= $UnPays['NOM_PAYS'] ?></option>
        <?php endforeach ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="<?= PATH ?>/marques"><button class="btn btn-warning">Retour à la liste</button></a>
</form>