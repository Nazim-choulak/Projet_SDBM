<?php

class Fabricants extends Controller
{

    public function index()
    {
        $this->loadModel('Fabricant');
        $fabricants = $this->Fabricant->getAll();
        $this->render('index', compact('fabricants'));
    }

    public function ajout()
    {
        $this->render('ajout', array());
    }

    public function ajout_save()

    {
        $nom = $_REQUEST['Nom'];
        $this->loadModel('Fabricant');
        $this->Fabricant->insert($nom);
        $fabricants = $this->Fabricant->getAll();
        $message = 'Le fabricant a bien été ajouté';
        $this->render('index', compact('fabricants', 'message'));
    }



    public function modif(int $id)
    {
        $this->loadModel('Fabricant');
        $this->Fabricant->id = array(
            'ID_FABRICANT' => $id
        );
        $fabricants = $this->Fabricant->getOne();
        $this->render('modif', compact('fabricants'));
    }

    public function modif_save(int $id)
    {
        $id = $_REQUEST['Id'];
        $nom = $_REQUEST['Nom'];
        $this->loadModel('Fabricant');
        $this->Fabricant->update($id, $nom);
        $fabricants = $this->Fabricant->getAll();
        $message = 'Le fabricant a bien été modifié';
        $this->render('index', compact('fabricants', 'message'));
    }

    public function suppr(int $id)
    {
        $this->loadModel('Fabricant');
        $this->Fabricant->id = array(
            'ID_FABRICANT' => $id
        );
        $fabricants = $this->Fabricant->getOne();
        $this->render('suppr', compact('fabricants'));
    }

    public function suppr_save(int $id)
    {
        $id = $_REQUEST['Id'];
        $this->loadModel('Fabricant');
        $this->Fabricant->delete($id);
        $fabricants = $this->Fabricant->getAll();
        $message = 'Le fabricant a bien été supprimé';
        $this->render('index', compact('fabricants', 'message'));
    }
}
