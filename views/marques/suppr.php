<h1 class= "text-center">Suppression d'une Marque</h1>
<form action="<?= PATH ?>/marques/suppr_save/<?= $Marques['ID_MARQUE'] ?>" method="POST">
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-select" value=<?= $Marques['ID_MARQUE'] ?> name="Id" id="Id" readonly />
        <label for="Nom">Code</label>
    </div>
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-select" value='<?= $Marques['NOM_MARQUE'] ?>' name="Nom" id="Nom" readonly />
        <label for="Nom">Nom Marque</label>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="<?= PATH ?>/marques"><button class="btn btn-warning">Retour à la liste</button></a>
</form>