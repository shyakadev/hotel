
<html>
<head>

</head>
<body>
<?php
include"connection.php";
$booking_id = $_POST['NULL'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$city = $_POST['city'];
$country = $_POST['country'];
$contact = $_POST['contact'];
$check_in = $_POST['NULL'];
$check_out = $_POST['Null'];
$adults = $_POST['Null'];
$child = $_POST['Null'];
$result = $_POST['Null'];
$room_id = $_POST['Null'];
$no_room = $_POST['NULL'];
$status = $_POST['Null'];

/*INSERT INTO booking (`booking_id`, `firstname`, `lastname`, `gender`, `city`, `country`, `email`, `contact`, `check_in`, `check_out`, `adults`, `child`, `result`, `room_id`, `no_room`, `status`) VALUES (NULL, 'few', 'ewered', 'female', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');*/

$sql=mysql_query("INSERT INTO booking (booking_id,firstname,lastname, gender,city,country,email,contact,check_in,check_out,adults,child,result,room_id,no_room,status) VALUES('$booking_id,$firstname,$lastname,$gender,$city,$country,$email,$contact,$check_in,$check_out,$adults,$child,$result,$room_id,$no_room,$status')");
if($sql){
	echo"<script>alert('Client Registered Successfully!!!')</script>";
	echo"<script>location.href='client.php'</script>";
}else{
	echo"failure".mysql_error();
}

mysql_close($con);
?>
</body>
</html>

