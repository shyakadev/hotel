<?php include_once "connection.php";

$sqlquery = "select * from room";
$result = mysqli_query($con, $sqlquery);
//$fresult = mysqli_fetch_array($result);
//print $result;
if (!$result) {
	printf("error: %s\n", mysqli_error($con));
	exit();
} 
?>

<!Doctype html>
<html>
<head>
<title> test</title>
</head>
<body>

<table border="1px">
<tr>
	<td>Room id </td>
	<td>room type </td>
	<td>rate </td>
	<td> Description </td>
</tr>
<?php 
while($res = mysqli_fetch_array($result, MYSQLI_NUM)) {
echo "<tr>";
echo "<td>".$res[1]."</td>";
echo "<td>".$res[2]."</td>";
echo "<td>".$res[3]."</td>";
echo "<td>".$res[4]."</td>";
echo "</tr>";

} mysqli_close($con);
?>
</table>
</body>