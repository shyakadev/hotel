

<html>

<head>
  <title> Modifier |muhawe</title>
    </head>
	<body>
	
	<?php
	
		try
			{
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$bdd = new PDO('mysql:host=localhost;dbname=directory', 'root', '', $pdo_options);
				
				
	$id=$_POST['id'];	
	$CLIENTNAME=$_POST['clientname'];
	$GENDER=$_POST['gender'];
	$PHONE=$_POST['phone'];
	$ROOMNO=$_POST['roomno'];
	$ARRIVAL_DATE=$_POST['arrival_date'];
	$DEPARTURE_DATE=$_POST['departure_date'];
	
	
	
	/*$OBSRVATION=$_POST['date2'];*/
							
							//header('location:../internes/a_modifier.php');
								
					/*$req = $bdd->prepare("UPDATE benefic SET num_info = :Ni,num_client= :Nc,type_info= :Type,titre_info= :Ti,resume=:Resi,contenu= :Ci,date_publication=:Pub,date_modification= NOW() WHERE num_info=:Ni");*/
					/*$req = $bdd->exec("UPDATE beneficiaire SET nom='$NOM' , prenom='$PRENOM', province='$NAISSANCE',matricule='$NOMM',sexe='$SEXE',datenaissance='$DATENAISSANCE',nommere='$SEXE1',nompere='$DATEADM',caracteristique='$CARACTERISTIQUE',projet='$PROJET',typelog='$TYPE',observation='$OBSRVATION2'WHERE idbeneficiaire='$idbenefv' ");
					*/
					$bdd->exec("UPDATE client SET clientname='$CLIENTNAME',gender='$GENDER',phone='$PHONE',roomno='$ROOMNO',arrival_date='$arrival_date',departure_date='$DEPARTURE_DATE', WHERE id='$id'"); 
		 echo '<p>'?><SCRIPT LANGUAGE="Javascript">alert("Update done !"); window.location.replace('viewclient.php')</SCRIPT><?php
	 /*echo"<script type=\"text/javascript\">";
											 echo "alert('modification réussie !');";
											
											 //echo "window.history.back();";
											  
											  
											 echo "</script>";*/
	
	}
	
        
    // Redirection du visiteur vers la page du minichat
    //header('Location: modification_abonne.php');

											 	

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

//si le pseudo n'existe pas



?>