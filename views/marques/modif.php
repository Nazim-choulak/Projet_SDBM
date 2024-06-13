<h1 class= "text-center">Modification d'une Marque</h1>

<form action="<?= PATH ?>/marques/modif_save/<?= $Marques['ID_MARQUE'] ?>" method="POST">
        <div class="form-floating mb-3 mt-3">
          <label for="Nom">Code</label>
          <input type="text" class="form-select" value=<?= $Marques['ID_MARQUE'] ?> name="Id" id="Id" readonly />
        </div>
        <div class="form-floating mb-3 mt-3">
          <label for="Nom">Nom Marque</label>
          <input type="text" class="form-select" value='<?= $Marques['NOM_MARQUE'] ?>' name="Nom" id="Nom" />
        </div>
        <div class="form-floating mb-3 mt-3">
            <label for="Nom">Fabricant</label>
            <select name="Id_fabricant" id="Id_fabricant" class="form-select"/>
                <option value=NULL>NULL</option>
                <?php foreach($fabricants as $fabricant): ?>
                    <?php
                        $selected = "";
                        if ($fabricant['ID_FABRICANT'] == $Marques['ID_FABRICANT']) {
                            $selected = " selected ";
                        }
                    ?>
                    <option value=<?= $fabricant['ID_FABRICANT'] ?><?=  $selected ?>><?= $fabricant['NOM_FABRICANT'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-floating mb-3 mt-3">
          <label for="Nom">Pays</label>
          <select name="Id_pays" id="Id_pays" class="form-select"/>
            <?php foreach($Lespays as $pays): ?>
                <?php
                    $selected = "";
                    if ($pays['ID_PAYS'] == $Marques['ID_PAYS']) {
                        $selected = " selected ";
                    }
                ?>
                <option value=<?= $pays['ID_PAYS'] ?><?=  $selected ?>><?= $pays['NOM_PAYS'] ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="<?= PATH ?>/marques"><button  class="btn btn-warning">Retour à la liste</button></a>
</form>  
