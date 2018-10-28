<?php

use PDO
use Class\aricle   // rajouter un namespace pour les class soit dossier Class

class ArticleManager
{
  private $pdo; 
    
  private $pdostat;   
    
    
    

  public function __construct()
  {
    $this->pdo = new PDO('mysql:host=localhost;dbname=article;charset=utf8','root','');
  }

  
    public function read($id)
    
    
    
    
    
    public function add(Stitre,$contenu;$date)
  {
    // Préparation de la requête d'insertion.
    // Assignation des valeurs pour l'id, le titre, le contenu, la date
    // Exécution de la requête.
    $q = $this->_db->prepare('INSERT INTO article(id, titre, contenu, date) VALUES(:titre, :contenu, :datePost');

    $q->bindValue(':titre', $post->titre ());
    $q->bindValue(':contenu', $post->contenu(), PDO::PARAM_STR);
    $q->bindValue(':datePost', $post->date(), PDO::PARAM_DATE);
    
    return $q->execute();
  }
    
    
    

  public function delete()
  {
    // Exécute une requête de type DELETE.
      $q = $this->_db->prepare('DELETE article WHERE :id');

    $q->bindValue(':d', $post->titre ());
    $q->execute();
  }

  public function get($id)
  {
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet ARTICLE.
      
      
      
  }

  public function getList()
  {
    // Retourne la liste de tous les Articles.
  }

  public function update()
  {
    // Prépare une requête de type UPDATE.
    // Assignation des valeurs à la requête.
    // Exécution de la requête.
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}