<?php

$host = 'localhost';
$dbusername = 'hotel';
$dbpass = 'hotelpass';
$db = 'hotels';
$con=mysqli_connect($host,$dbusername,$dbpass,$db);
//check connection
//
if (mysqli_connect_errno())
{
	echo 'failed to connect';
}


/* or die("Connection failed for client".mysql_error());
mysql_select_db("hoteLs",$con);

if (!$con) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('hotels', $con);
if (!$db_selected) {
    die ('Can\'t use hotel : ' . mysql_error());
}*/

?>