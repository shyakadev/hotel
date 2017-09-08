
        <HTML>
        
		<h1 ><U>THIS PAGE IS TO UPDATE</U></h1>


		<?php	
				
				try
				{  
					//require_once("connection.php");
					$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
					$bdd = new PDO('mysql:host=localhost;dbname=directory', 'root', '', $pdo_options);
						$id=$_GET["id"];
					
					
					$reponse=$bdd->query("select id,clientname,gender,phone,roomno,arrival_date,departure_date from booking where id='$id'");
						
						while ($donnees = $reponse->fetch())
							{
						
					?>
					
					
					
					<form action="clientsave.php" method="post" enctype="multipart/form-data">
					<table >			
					

															
					<tr><td><label for="na"><FONT SIZE=4>Id</font></label></td><td><input type="text"value= "<?php echo  "$id"; ?>" name="id" id="nom"/></td></tr>
						
									<tr><td>client name: </td> <td><input name="clientname" value= "<?php echo  htmlspecialchars($donnees['clientname']); ?>" size="40" type="text"  placeholder= "client name"><br/></td></tr> <p/>		
									<tr><td>gender : </td> <td><input name="gender" value= "<?php echo  htmlspecialchars($donnees['gender']); ?>" size="40" type="text"  placeholder= ""><br/></td></tr> <p/>	
									<tr><td>Phone number : </td> <td><input name="phone" value= "<?php echo  htmlspecialchars($donnees['phone']); ?>" size="40" type="text"  placeholder= ""><br/></td></tr> <p/>	
									<tr><td>roomno : </td> <td><input name="roomno" value= "<?php echo  htmlspecialchars($donnees['roomno']); ?>" size="40" type="text"  placeholder= ""><br/></td></tr> <p/>	
									<tr><td>arrivaldate : </td> <td><input name="arrival_date" value= "<?php echo  htmlspecialchars($donnees['arrival_date']); ?>" size="40" type="date" placeholder= ""><br/></td></tr> <p/>
									<tr><td>departuredate : </td> <td><input name="departure_date" value= "<?php echo  htmlspecialchars($donnees['departure_date']); ?>" size="40" type="date"  placeholder= ""><br/></td></tr> <p/>	
					
					</tr><td></td>
						
				
				
	<td colspan="2"><input  type="submit" value="Update" onclick="return(confirm('Update?'));"/><input type="reset" name="submit" value="Cancel" onclick="return(confirm('Do you really want to cancel'));"/></td>
						
							
							</table>	
						</table>                                              
                                                                    
						</form>
			<?php
						
					}}
	
			
			   catch(Exception $e)
			{
			   die('Erreur : '.$e->getMessage());

			}
			?>	

		 
	 </form>

</table>
        </div><!--close content_item-->
      </div><!--close content-->    
  </div><!--close site_content-->     
        
   
  
     
  
</body>
<script src="library.js"></script>
<script src="java.js"></script>

</html>