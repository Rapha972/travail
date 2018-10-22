<?php
class article{
private $id
private $titre
private $contenu
private $date

// création des getters
    
public function id()
{
 return $this->id; 
}
    
public function getTitre()
{
 return $this->titre; 
}

public function contenu()
{
 return $this->_contenu; 
    
}

public function Getdate()
{
 return $this->_date; 
        
}
    
// création des setters
    
public function setId($id)
{
  if(isset($id=int($id)&& $id>0))
      $this->_id=$id;
  }
      
    
}