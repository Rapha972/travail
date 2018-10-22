<?php

class ArticlesManager
{
  private $_db; // Instance de PDO.
    
  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Article $post)
  {
    // Préparation de la requête d'insertion.
    // Assignation des valeurs pour l'id, le titre, le contenu, la date
    // Exécution de la requête.
    $q = $this->_db->prepare('INSERT INTO article(titre, contenu, date) VALUES(:titre, :contenu, :datePost)');

    $q->bindValue(':titre', $post->getTitre ());
    $q->bindValue(':contenu', $post->contenu(), PDO::PARAM_STR);
    $q->bindValue(':datePost', $post->Getdate(), PDO::PARAM_DATE);
    
    $q->execute();
  }
    
    
    

  public function delete(Article $post)
  {
    // Exécute une requête de type DELETE.
  }

  public function get($id)
  {
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet ARTICLE.
      
      
  }

  public function getList()
  {
    // Retourne la liste de tous les Articles.
  }

  public function update(Article $post)
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