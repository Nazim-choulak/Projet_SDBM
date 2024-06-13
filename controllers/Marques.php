<?php

class Marques extends Controller
{

    public function index()
    {
        $this->loadModel('Marque');
        $Marques = $this->Marque->getAll_Marques();
        $this->render('index', compact('Marques'));
    }

    public function ajout()
    {
        $this->loadModel('Pays');
        $pays = $this->Pays->getAll("NOM_PAYS asc");
        $this->loadModel('Fabricant');
        $fabricants = $this->Fabricant->getAll("NOM_FABRICANT asc");
        $this->render('ajout', compact('pays', 'fabricants'));
    }

    public function ajout_save()

    {
        $nom = $_REQUEST['Nom'];
        $id_fab = $_REQUEST['Id_fabricant'];
        $id_pays = $_REQUEST['Id_pays'];

        $this->loadModel('Marque');
        $this->Marque->insert($nom, $id_fab, $id_pays);
        $Marques = $this->Marque->getAll_Marques();
        $message = "La Marque a bien été ajoutée";
        $this->render('index', compact('Marques', 'message'));
    }



    public function modif(int $id)
    {
        $this->loadModel('Marque');
        $this->Marque->id = array(
            'ID_Marque' => $id
        );
        $Marques = $this->Marque->getOne();
        $this->loadModel('Pays');
        $Lespays = $this->Pays->getAll("NOM_PAYS asc");
        $this->loadModel('Fabricant');
        $fabricants = $this->Fabricant->getAll("NOM_FABRICANT asc");
        $this->render('modif', compact('Marques', 'Lespays', 'fabricants'));
    }

    public function modif_save(int $id)
    {
        $id = $_REQUEST['Id'];
        $nom = $_REQUEST['Nom'];
        $id_pays = $_REQUEST['Id_pays'];
        $id_fabricant = $_REQUEST['Id_fabricant'];


        $this->loadModel('Marque');
        $this->Marque->update($id, $nom, $id_fabricant, $id_pays);
        $Marques = $this->Marque->getAll_Marques();
        $message = "La Marque a bien été modifiée";
        $this->render('index', compact('Marques', 'message'));
    }

    public function suppr(int $id)
    {
        $this->loadModel('Marque');
        $this->Marque->id = array(
            'ID_Marque' => $id
        );
        $Marques = $this->Marque->getOne();
        $this->render('suppr', compact('Marques'));
    }

    public function suppr_save(int $id)
    {
        $id = $_REQUEST['Id'];
        $this->loadModel('Marque');
        $this->Marque->delete($id);
        $Marques = $this->Marque->getAll_Marques();
        $message = 'Le Marque a bien été supprimé';
        $this->render('index', compact('Marques', 'message'));
    }
}
