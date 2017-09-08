
<html>
<head>

</head>
<body>
<?php
$con=mysql_connect("localhost","root","") or die("Connection failed for booking".mysql_error());
mysql_select_db("hotel",$con);
$sql="INSERT INTO booking SET booking_code='$_POST[bookingcode]',client_id='$_POST[client_id]',checkin='$_POST[arrivaldate]',checkout='$_POST[departuredate]',room_id='$_POST[room]' ";

if(!mysql_query($sql,$con)){
	die('Error:' .mysql_error());

}else{
echo"<script>alert('You have booked Successfully. Your booking date is $_POST[arrivaldate] AND you will be gone on $_POST[departuredate] .Thanks. ')</script>";
	echo"<script>location.href='booking.php'</script>";	

$con=mysql_connect("localhost","root","") or die("Connection failed for booking".mysql_error());
mysql_select_db("hotel",$con);
$sql1=" UPDATE rooms set status='Taken' where room_no=$_POST[room] ";

}

mysql_close($con);
?>
</body>
</html>

