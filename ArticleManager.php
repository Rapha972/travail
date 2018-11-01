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
    
    
    
    
    
   