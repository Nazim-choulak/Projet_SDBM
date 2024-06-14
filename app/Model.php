<?php
abstract class Model
{
    // Informations de la base de données
    private $host = "localhost";
    private $db_name = "sdbm_v2";
    private $username = "root";
    private $password = "";

    // Propriété qui contiendra l'instance de la connexion
    protected $_connexion;

    // Propriétés permettant de personnaliser les requêtes
    public $table;
    public $id;

    /**
     * Fonction d'initialisation de la base de données
     *
     * @return void
     */
    public function getConnection()
    {
        // On supprime la connexion précédente
        $this->_connexion = null;

        // On essaie de se connecter à la base
        try {
            $this->_connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->_connexion->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }
    }

    /**
     * Méthode permettant d'obtenir un enregistrement de la table choisie en fonction d'un id
     *
     * @return void
     */
    public function getOne()
    {
        $cle_recherchee = "";
        $tab_cles = array();
        foreach ($this->id as $key => $value) {
            $tab_cles[] = $key . "=" . $value;
        }
        $cle_recherchee = implode(" AND ",  $tab_cles);
        $sql = "SELECT * FROM " . $this->table . " WHERE " . $cle_recherchee;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    }

    /**
     * Méthode permettant d'obtenir tous les enregistrements de la table choisie
     *
     * @return void
     */
    public function getAll(string $tri="")
    {
        $sql = "SELECT * FROM " . $this->table;
        if ($tri != "") {
            $sql .= " ORDER BY ".$tri;
        }
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}