<?php 


function chargerClasse($classe)
   {
       require $classe.'.php';
   }

spl_autoload_register('chargerClasse');




$magicien=new Magicien();

$addition=function($nbr)
{
    return $nbr+3;
};

$listeNbr = $addition(1);
echo $listeNbr;

echo "Merci Git";

?>
