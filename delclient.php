

<?PHP

include'viewclient.php';

$id=$_GET["id"];
$cone=mysql_connect("localhost","root","");
$bd=mysql_select_db("directory",$cone);

$req1=mysql_query("DELETE FROM CLIENT WHERE id=".$id );

if($req1)
echo '<p>'?><SCRIPT LANGUAGE="Javascript">alert("Delete done"); window.location.replace('viewclient.php')</SCRIPT><?php
	


	
?>
