<?php 




class Magicien extends Personnage implements Movable
{
   
    
    public function deplacer()
    {
        
      parent::Compteur();
        
    }
    
    
  public  function Compteur() 
  {
    echo "classe fille";
  }
    
  
  public function move($dest)
  {
      throw new Exception('Les deux paramètres doivent être des nombres');
  }
 
}


?>
