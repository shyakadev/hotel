
<?php
include "connection.php";

if (isset($_POST['submit'])){
$firstname = $con->real_escape_string($_POST['firstname']);
$lastname = $con->real_escape_string($_POST['lastname']);
$email = $con->real_escape_string($_POST['emailaddress']);
$contact = $con->real_escape_string($_POST['contact']);
$gender = $con->real_escape_string($_POST['gender']);
$city = $con->real_escape_string($_POST['city']);
$country = $con->real_escape_string($_POST['country']);
$checkin = $con->real_escape_string($_POST['checkin']);
$checkout = $con->real_escape_string($_POST['checkout']);
$adults = $con->real_escape_string($_POST['adult']);
$children = $con->real_escape_string($_POST['children']);
$room = $con->real_escape_string($_POST['room']);
$sqlquery = $con->query("insert into booking (firstname, lastname, email, contact, gender, city, country, check_in, check_out, adults, child, no_room) values('$firstname', '$lastname', '$email', '$contact', '$gender', '$city', '$country', '$checkin', '$checkout', '$adults', '$children', '$room')");
if (!$sqlquery){
	echo mysqli_error($con);
}
else {
	echo "Passed:" . $sqlquery . "<br>" . mysqli_error($con);
}}
mysqli_close($con);

//header('location:final.php');
echo "process..";
header('location: final.php');
?>