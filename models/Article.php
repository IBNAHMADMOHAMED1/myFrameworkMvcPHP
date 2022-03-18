<?php
class Article extends Model{

    public function __construct()
    {
        // die(var_dump(5));
        // Nous définissons la table par défaut de ce modèle
        $this->table = "posts";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    /**
     * Retourne un article en fonction de son slug
     *
     * @param string $slug
     * @return void
     */
    public function findId(string $slug){
        // die(var_dump($this->table));
        $sql = "SELECT * FROM ".$this->table." WHERE `id`='".$slug."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);    
    }

}