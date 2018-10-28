<?php
class article
{
private $id;
private $titre;
private $contenu;
private $dateArticle;

// création des getters
    
public function getId()
{
 return $this->id; 
}
    
public function getTitre()
{
 return $this->titre; 
}

public function getContenu()
{
 return $this->contenu; 
    
}

public function GetdateArticle()
{
 return $this->dateArticle; 
        
}
    
// création des setters
    
public function setTitre($titre)
{
 
      $this->titre =$titre;
  }
public function setcontenu($contenu)
{
  
      $this->contenu=$contenu;
  }
      
    
public function setdateArticle($dateArticle)
{
  
      $this->dateArticle =$dateArticle;
  }
     
}