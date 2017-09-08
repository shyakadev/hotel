<?php include 'head.php' ?>
<?php include_once "connection.php";?>
<?php

if (isset($_POST['action'])) {
  $hotelname = $_POST['hotel'];
  # code...
}
else {
  $hotelname = false;
}
#query from hotels
$sqlquery = "select * from hotels where hotel_name='$hotelname'";
$result = $con->query($sqlquery);
$row = $result->fetch_assoc();
$hotelid = $row['hotel_id'];

/*function quantity(string $type){
  global $hotelid;
  global $con;
  if ($type = 'single'){
     #query from room with variable hotelid 
$rquery = "select * from room where hotel_id='$hotelid' and type=$type"; 
  }
 elseif($type = 'double'){
    #query from room with variable hotelid 
$rquery = "select * from room where hotel_id='$hotelid' and type=$type";
 }
$rresult = $con->query($rquery);
$rrow = $rresult->fetch_assoc();
$quantity = $rrow['quantity'];

return $quantity;

}*/


/*function quantity() {
  global $quantity;
  echo $quantity;
}*/

function badge(){
  global $q;
  $red = 'style="float: right; background-color: red"';
  $orange = 'style="float: right; background-color: orange"';
  $green = 'style="float: right; background-color: green"';
 if($q>=10) {
  return $green;} 

  elseif ($q>=5) { 
    echo $orange;} 
    else {return $red;} 

}
$g = badge();


/*$hotelq = "select * from hotels where hotel_name = $hotelname";
$hotelres = $con->query($hotelq);
//$hotelnme = $hotelres->fetch_assoc();
$hotelid = $hotelnme['hotel_id'];

//submitted hotel
if(isset($_POST['action'])){
  $shotel = $_POST['room'];
}
else{
  $shotel = 'none';
}
if ($shotel = $hotelname) {
  # code...

 /* $rquery = "select * from room where hotel_name = $shotel";
  $rresult = $con->query($rquery);
  $rrow = $rresult->fetch_assoc();
  $hotelid= $rrow["hotel_id"];

 /* $rquery = "select * from room where hotel_id = $hotelid";
  $rresult = $con->query($rquery);
  $rrow = $rresult->fetch_assoc();*/
  

#room query
/*if (isset($_POST['karisimbi'])){
$karisimbi = $con->real_escape_string($_POST['karisimbi']);


  $sqlquery = "select * from room where room_id=2";
$result = $con->query($sqlquery);
$row = $result->fetch_assoc();

//$fresult = mysqli_fetch_array($result);
//print $result;*/


?>


<body>
<?php include 'header.php' ?>
<div style="padding-top:80px"></div>
<div class="row">
<div class="well col-md-6 col-md-offset-3" style="margin-top: 260px;">
<?php
$rq = "select * from room where hotel_id='$hotelid'";
$rres = $con->query($rq);
if($hotelname = $hotelname){
while($res = $rres->fetch_assoc()) {
$q = $res['quantity'];
/*echo "<tr>";
echo "<td>".$res['room_id']."</td>";
echo "<td>".$res['hotel_id']."</td>";
echo "<td>".$res['type']."</td>";
echo "<td>".$res['rate']."</td>";
echo "</tr>";*/


echo '<div class="media">
    <div class="media-left media-top">
      <img class="responsive" src="karisimbi.jpg" class="media-object">
    </div>
    <div class="media-body">
      <h4 class="media-heading">'.$res['type'] .'<span class="badge"'.$g.'">Available '.$res['quantity'].'</span></h4> 
      <p>'.$res['description'].'</p>
    </div>
    <div>
<form method="post" action="booking.php">
                <input type="hidden" name="hotelname" value="'.$hotelname.'">
                <input type="hidden" name="roomtype" value="'.$res['type'].'">
                <input type="submit" class="btn btn-info" style="float: right;"  name="action" value="Rooms" /> </form>                </div>
      </div>
  <hr>';}}
  else {
    echo '<h2>No Rooms Found.. ';}?></div>
  <!--<div class="media">
    <div class="media-left media-top">
      <img class="responsive" src="karisimbi.jpg" class="media-object">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Double <span class="badge" style="float: right; background-color: red">Available 3</span></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <a href="booking.php" class="btn btn-info" style="float: right;" role="button">Book</a>

  </div>
  </div>
  </div>-->

  <div class="row">
  <?php echo "<p>".$hotelname."</p>"; ?>


</div>

  </body>