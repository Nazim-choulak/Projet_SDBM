<h1>Modification d'un fabricant</h1>

<form action="<?= PATH ?>/fabricants/modif_save/<?= $fabricants['ID_FABRICANT'] ?>" method="POST">
<div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="Id" placeholder="" name="Id" value=<?= $fabricants['ID_FABRICANT'] ?> readonly >
        <label for="Id">Code fabricant</label>
    </div>
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="Nom" placeholder="" name="Nom" id="Nom"
        value=<?= $fabricants['NOM_FABRICANT'] ?>>
        <label for="Nom">Nom fabricant</label>
    </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="<?= PATH ?>/fabricants"><button  class="btn btn-warning">Retour à la liste</button></a>
</form>  
<br>