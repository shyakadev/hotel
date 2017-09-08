
<html>
<head>
 <body bgcolor="white green">
            
            <h1><u>The list of client</u></h1>

      <form>
      <table >

	  <table border='100s' 
	<thead style="1">
	<!--<tr><th><label>Id</th>-->
	<th><label>clientname</th>
	<th><label>gender</th>
	<th><label>phone</th>
    <th><label>roomno</th>
	<th><label>arrival date</th>
	<th><label>departure date</th>
	<th><label>Edit</th>
	<th><label>Delete</th>
	
	
	</tr>
	</thead></div></form>

  	<?php
try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=localhost;dbname=directory', 'root', '', $pdo_options);
	
	
	$reponse=$bdd->query('select id,clientname,gender,phone,roomno,arrival_date,departure_date, from booking');
	$repsup=1;
	while($donnees=$reponse->fetch())
	{
	?>
	<tr>
	<!--<td><?php echo($donnees['id']);?></td>-->
	<td><?php echo($donnees['clientname']);?></td>
	<td><?php echo($donnees['gender']);?></td>
	<td><?php echo($donnees['phone']);?></td>
	<td><?php echo($donnees['roomno']);?></td>
	<td><?php echo($donnees['arrival_date']);?></td>
	<td><?php echo($donnees['departure_date']);?></td>
   
	<td><pre><a href="upclient.php?id=<?php echo $donnees['id']; ?>"><img class='editdelete'  src='Images/edit.png'></a></pre></td>
	<td><pre><a href="delclient.php?id=<?php echo $donnees['id']; ?>"onclick="return(confirm('Do you really want to delete this client'));"><img class='dropdelele'  src='Images/drop.png'></a></pre> </td>
 
	
 <?php
	$repsup=$repsup+1;
	}
	
	$reponse->closecursor();
	
	
	
}



catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>