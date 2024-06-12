<?php
class Marque extends Model
{

    public function __construct()
    {
        $this->table = "marque";
        $this->getConnection();
    }


    public function update(int $id, string $nom, string $id_fabricant, int $id_pays)
    {

        $nom = htmlspecialchars($nom);

        if ($id_fabricant != "NULL") {
            $sql = "UPDATE ".$this->table." set NOM_MARQUE=:p_nom, ID_FABRICANT=:p_fab, ID_PAYS=:p_pays WHERE ID_MARQUE=:p_id";
            $query = $this->_connexion->prepare($sql);
            $query->bindParam(':p_id', $id, PDO::PARAM_INT);
            $query->bindParam(':p_nom',  $nom, PDO::PARAM_STR);
            $query->bindParam(':p_fab', $id_fabricant, PDO::PARAM_INT);
            $query->bindParam(':p_pays', $id_pays, PDO::PARAM_INT);
            $query->execute();
           
        } else {

            $sql = "UPDATE ".$this->table." set NOM_MARQUE=:p_nom, ID_FABRICANT=NULL, ID_PAYS=:p_pays WHERE ID_MARQUE=:p_id";
            $query = $this->_connexion->prepare($sql);
            $query->bindParam(':p_id', $id, PDO::PARAM_INT);
            $query->bindParam(':p_nom', $nom, PDO::PARAM_STR);
            $query->bindParam(':p_pays', $id_pays, PDO::PARAM_INT);
            $query->execute();
        }
    }


    public function delete(int $id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE ID_MARQUE=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT);
        $query->execute();
    }


    public function insert(string $nom, int $id_pays, int $id_fabricant )
    {

        $nom = htmlspecialchars($nom); 

        if ($id_fabricant != "NULL") {
            $sql = "INSERT INTO ".$this->table." (NOM_MARQUE, ID_FABRICANT, ID_PAYS) VALUES (:p_nom, :p_id_fabricant, :p_id_pays)";
            $query = $this->_connexion->prepare($sql);
            $query->bindParam(':p_nom', $nom,  PDO::PARAM_STR );
            $query->bindParam(':p_id_fabricant', $id_fabricant,  PDO::PARAM_INT );
            $query->bindParam(':p_id_pays', $id_pays,  PDO::PARAM_INT );

        } else {

            $sql = "INSERT INTO ".$this->table." (NOM_MARQUE, ID_PAYS) VALUES (:p_nom,  :p_id_pays)";
            $query = $this->_connexion->prepare($sql);
            $query->bindParam(':p_nom', $nom,  PDO::PARAM_STR );
            $query->bindParam(':p_id_pays', $id_pays,  PDO::PARAM_INT );

        }
        
        $query->execute();   
    }

    public function getAll_Marques()
    {
        $sql = "SELECT ID_MARQUE, NOM_MARQUE, NOM_FABRICANT, NOM_PAYS
                FROM " . $this->table . " LEFT JOIN fabricant ON marque.ID_FABRICANT=fabricant.ID_FABRICANT INNER JOIN pays ON pays.ID_PAYS=marque.ID_PAYS
        ORDER BY ID_MARQUE";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
