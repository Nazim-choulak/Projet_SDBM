<?php

class Continents extends Controller
{

    public function index()
    {
        $this->loadModel('Continent');
        $continents = $this->Continent->getAll();
     
        $this->render('index', compact('continents'));
    }

    public function ajout()
    {
        $this->render('ajout', array());
    }

    public function ajout_save()

    {
        $nom = $_REQUEST['Nom'];
        $this->loadModel('Continent');
        if (!empty($_REQUEST['Nom'])) {
            $this->Continent->insert($nom);
        }
        $continents = $this->Continent->getAll();
        $scriptJS = "";
        if (isset($_REQUEST['Nom']) && !empty($_REQUEST['Nom'])) {
            $scriptJS = 'const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "success",
                title: "Le continent a bien été ajouté"
              });';
        }

        $this->render('index', compact('continents', 'scriptJS'));
    }

    public function modif(int $id)
    {
        $this->loadModel('Continent');
        $this->Continent->id = array(
            'ID_CONTINENT' => $id
        );
        $continents = $this->Continent->getOne();
        $this->render('modif', compact('continents'));
    }

    public function modif_save(int $id)
    {
        $id = $_REQUEST['Id'];
        $nom = $_REQUEST['Nom'];

        $this->loadModel('Continent');
        $this->Continent->id = array(
            'ID_CONTINENT' => $id
        );
        $continents = $this->Continent->getOne();
        $AvModif = $continents['NOM_CONTINENT'];
        $scriptJS = "";
        $this->Continent->update($id, $nom);
        $continents = $this->Continent->getAll();

        if (isset($_REQUEST['Nom']) && !empty($_REQUEST['Nom']) && ($AvModif != $nom)) {
            
            $scriptJS = 'const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "succes",
                title: "Le continent a bien été modifié"
              });';
        }
        
        $this->render('index', compact('continents', 'scriptJS'));
    }

    public function suppr(int $id)
    {
        $this->loadModel('Continent');
        $this->Continent->id = array(
            'ID_CONTINENT' => $id
        );
        $continents = $this->Continent->getOne();
        $this->render('suppr', compact('continents'));
    }

    public function suppr_save(int $id)
    {
        $id = $_REQUEST['Id'];
        $this->loadModel('Continent');
        $this->Continent->delete($id);
        $continents = $this->Continent->getAll();
        if (isset($_REQUEST['Nom'])) {
            $scriptJS = 'const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "success",
                title: "Le continent a bien été supprimé"
              });';
        }
        $this->render('index', compact('continents', 'scriptJS'));
    }
}
