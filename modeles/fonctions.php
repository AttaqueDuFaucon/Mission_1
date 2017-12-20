<?php
function connexion()
{ 

  $hote="localhost";
  $login="root";
  $mdp="root";
  $bd="gsb";
  $connexion= mysqli_connect($hote, $login, $mdp,$bd)or die("Erreur ");
   
  
   return $connexion;

}

function getLesUtilisateurs()
{
	$connexion = connexion();
	$req = "select * from visiteur";
	$result = mysqli_query($connexion,$req);
	
	if (!$result) 
	{
   		
		$message='Requête invalide';
    	die($message);
    }
    
   $lesUtilisateurs=mysqli_fetch_all($result);
	
    return $lesUtilisateurs;
}
function validco($user,$mdp)
{
 $connexion = connexion();
 $req="select count(*) as nb from visiteur where login = '$user' and mdp='$mdp'";
 //execution de la requete
 $res = mysqli_query($connexion,$req);
 //recupération des données
$laLigne = mysqli_fetch_assoc($res);
 return $laLigne;
}

function getMoisAnnee()
{
	$connexion = connexion();
	$req = "SELECT distinct mois FROM `lignefraisforfait` order by mois";
	$res = mysqli_query($connexion,$req);
	$laLigne=mysqli_fetch_all($res);
	return $laLigne;
}

function getChercher($moisannee)
{
	$connexion = connexion();
	$req = "SELECT idFraisForfait, sum(quantite) as 'cumul' FROM `lignefraisforfait` where mois = '$moisannee' group by idFraisForfait";
	$res = mysqli_query($connexion,$req);
	$laLigne=mysqli_fetch_all($res);
	return $laLigne;
	
}

?>
