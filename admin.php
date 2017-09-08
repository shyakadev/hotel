<?php include 'head.php' ?>
<body>
<?php include 'header.php'; ?>
<?php include 'connection.php';?>

<?php 
$bqlquery = "select * from booking";
$bresult = $con->query($bqlquery);
$brow = $bresult->fetch_assoc();?>

<div style="margin-bottom: 5%">
</div>
  	<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Admin's Panel</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Booked</a></li>
        <li><a href="#section2">Add Hotel</a></li>
       
              </ul><br>
         </div>
  		<div class="col-md-9 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Booked
	</div>
	<div class="panel-body">
	<div class="container-fluid">
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="text-center">Names</th>
        <th class="text-center">Contact</th>
        <th class="text-center">Hotel</th>
        <th class="text-center">Room Type</th>
        <th class="text-center">Check in</th>
        <th class="text-center">Check out</th>
        <th class="text-center">Quantity</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    while($res = $bresult->fetch_assoc()){

    	echo '
      <tr>
        <td class="text-center">'.$res['firstname'].'</td>
        <td class="text-center">'.$res['contact'].'</td>
        <td class="text-center">'.$res['hotel_name'].'</td>
        <td class="text-center">'.$res['room_type'].'</td>
        <td class="text-center">'.$res['check_in'].'</td>
        <td class="text-center">'.$res['check_out'].'</td>
        <td class="text-center">'.$res['quantity'].'</td>
        <td class="text-center"><a href="edit.php">Edit</a></br><a href="delete.php">Delete</a></td>
      </tr>';} ?>
     
    </tbody>
  </table>
</div>


			</div>
</div>
  		</div>
  		  	</div>
  		  	</div>