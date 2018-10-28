<?php
class article{
private $id
private $titre
private $contenu
private $dateArticle

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

public function Getdate()
{
 return $this->_date; 
        
}
    
// création des setters
    
public function setId($id)
{
  if(isset($id=int($id)&& $id>0))
      $this->id=$id;
  }
      
    
}