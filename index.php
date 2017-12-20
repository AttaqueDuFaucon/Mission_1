<?php
session_start();
require_once("modeles/fonctions.php");
/*include("vues/v_accueil.php");*/

	/*echo $_REQUEST['uc'];*/

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
     $uc = $_REQUEST['uc'];


switch($uc)
{
	case 'accueil':
            {
                include("vues/v_connexion.php");
		break;} 
		
	case 'gestion':
            {
				
                include("controleurs/c_gsb.php");
				
		break;} 
		
	
}

?>

