<?php

if(!isset($_REQUEST['action']))
     $action = 'Liste';
else
	$action = $_REQUEST['action'];
  
  
$moisannee = "";
$res = null;
 
switch($action)
{
	
        
	case 'validConnexion' :
	{
		
		$user = $_REQUEST['user'];
		$mdp = $_REQUEST['mdp'];
		$nb = validco($user,$mdp);
		if($nb['nb'] == '0'){
			?>
			<script>alert('Erreur !');</script>
			<?php
			include('vues/v_connexion.php');
		}
		else{
			?>
			<script>alert('Bienvenue');</script>
			<?php
			$lesMois = getMoisAnnee();
			include('vues/v_accueilco.php');
		}
		break;
	}
        
        case 'sedeco' :
	{
            $connexion = connexion();
            $lesUtilisateurs=mysqli_close($connexion);
            ?>
            <script>alert('Déconnexion');</script>
            <?php
            include("vues/v_connexion.php");
            break;
        }
		
	case 'chercher' :
	{
		$user = $_REQUEST['user'];
		$moisannee = $_REQUEST["moisannee"];
		$lesMois = getMoisAnnee();
		$res = getChercher($moisannee);
		
		
        include("vues/v_accueilco.php");
		break;
    }
}
?>

