<?php
class Continent extends Model
{

    public function __construct()
    {
        $this->table = "continent";
        $this->getConnection();
    }


    public function update(int $id, string $nom)
    {

        $nom = htmlspecialchars($nom);

        $sql = "UPDATE " . $this->table . " set NOM_CONTINENT=:p_nom WHERE ID_CONTINENT=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT);
        $query->bindParam(':p_nom',  $nom,  PDO::PARAM_STR);
        $query->execute();
    }


    public function delete(int $id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE ID_CONTINENT=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT);
        $query->execute();
    }


    public function insert(string $nom)
    {

        $nom = htmlspecialchars($nom);

        $sql = "INSERT INTO " . $this->table . " (NOM_CONTINENT) VALUES (:p_nom)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_nom',  $nom,  PDO::PARAM_STR);
        $query->execute();
    }
}
