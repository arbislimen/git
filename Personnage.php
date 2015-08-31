<?php 

class Personnage
{
    
   protected $force=130;
   private $localisation;
   
   
   const VAL=30;
   
   private static $compteur=0;
   
   public function __construct($loc)
   {
      $this->localisation=$loc;
    
       
   }
   
   public function __destruct()
   {
       
       
   }
   
   
   public function  __set($nom,$valeur)
   {
   }
   
   public function __call($nom,$arguments)
   {
       echo "methode n'existe pas";
   }

   private  function deplacer()
   {
        if (method_exists($this, 'Compteur'))
                
                 echo "true";
        else {
            
          echo "false";          
            
           
             }
   }
   
  public function frapper()
  {
     static::Compteur();
  }
  
  
  
   
   
  
  final public function parler()
   {
       
      echo self::$compteur;
   }        
   
   
   public  function getCompteur() 
  {
    echo self::$compteur;
  }
   
  
   public  function Compteur() 
  {
    echo "classe mere";
  }
   
   public function  __toString()
   {
       return $this->localisation;
   }
    
}




?>
