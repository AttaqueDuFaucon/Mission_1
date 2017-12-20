<!DOCTYPE html>						
<html>
    <head>
        <title>Accueil</title>
        <link href="styles/cssGeneral.css" rel="stylesheet" media="screen">
    </head>
    <body>
       
        <img src="images/logo.jpg" style="">
        <div id="seco">
           <a href="index.php?uc=gestion&action=sedeco">Se deconnecter</a>
        </div>
        
        <?php
            echo "Session : ".$user;
        ?>
        
        <div id="po">
        <p>Suivi des cumuls de tous les frais par mois</p>
        </div>
        <div id="accueil">
            <h1>Période</h1>
			<form action="index.php?uc=gestion&action=chercher&user=<?php echo $user;?>"  method="POST" >
            Mois/Année: <select name="moisannee">
			<?php foreach ($lesMois as $unMoi):	?>

						<option value="<?php echo $unMoi[0];?>" <?php if($unMoi[0] == $moisannee) echo "selected" ?>><?php echo $unMoi[0];?></option>
						<?php endforeach;?>  
                       </select>
					   <input type="submit" value="chercher" name="chercher">
					   </form>
            <br></br>
            <h3> Cumul pour tous les visiteurs des Frais au forfait par poste </h3>
            <table>
                <tr>
                    <th>Repas midi</th>
                    <th>Nuitée</th>
                    <th>Etape</th>
                    <th>Km</th>
                </tr>
				<tr>
				<td>
					<?php if($res != null) echo $res[3][1]*25 ." €";?>
					</td>
					<td>
					<?php if($res != null) echo $res[2][1]*80 ." €";?>
					</td>
					<td>
					<?php if($res != null) echo $res[0][1]*110 ." €";?>
					</td>
					<td>
					<?php if($res != null) echo $res[1][1]*0.62 ." €";?>
					</td>
					
				</tr>
                
            </table>
            <br></br>
        </div>
    </body>
</html>