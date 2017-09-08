
<?php include 'head.php' ?>
<body>
<?php include 'header.php'; ?>
<?php 
if (isset($_POST['action'])) {
  $hotelname = $_POST['hotelname'];
  $roomtype = $_POST['roomtype'];
  # code...
}
else {
  $hotelname = 'no hotel';
  $roomtype = '_';
}
?>
<div class="row" style="padding-bottom: 80px"></div>
<div class="row">
<div class="container">
<form class="form-horizontal" action="book.php" method="post">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Book Now</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">First Name</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="Your First Name" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Last Name</label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="Your Last Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailaddress">Email Address</label>  
  <div class="col-md-4">
  <input id="emailaddress" name="emailaddress" type="text" placeholder="Your email Address" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone Number</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="ex: 250-787879873" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tourselection">Gender</label>
  <div class="col-md-4">
    <select id="gender" name="gender" class="form-control">
      <option value="1">Male</option>
      <option value="2">Female</option>
          </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="name">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="Your City" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="name">Country</label>  
  <div class="col-md-4">
  <input id="country" name="country" type="text" placeholder="Your Country" class="form-control input-md" required="">
    
  </div>
</div>
<div>
    <div class="row col-md-offset-4">
        <div class="col-md-3">
            <label class="control-label" for="dpd1">Check in: </label>
            <input name="checkin" class="form-control" type="text" id="dpd1" required=""  />
        </div>
        <div class="col-md-3">
            <label class="control-label" for="dpd2">Check out: </label>
            <input class="form-control" name="checkout" type="text" id="dpd2" required="" />
        </div>
    </div>
    </div>

<!-- Select Basic -->
<div style="padding-top: 10px;">
<?php echo '

<div class="form-group">
  <label class="col-md-4 control-label" for="hotelname">Hotel Name</label>
 <div class="col-md-4">
  <input id="hotelname" name="hotelname" type="text" value="'.$hotelname.'" class="form-control input-md" disabled>
    
  </div>

</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="roomtype">Room Type</label>
  <div class="col-md-4">
  <input id="roomtype" name="roomtype" type="text" value="'.$roomtype.'" class="form-control input-md" disabled>
    
  </div>

</div>'; ?>



<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="quantity">Number of Adult</label>  
  <div class="col-md-4">
  <input id="adult" name="adult" type="number" placeholder="if not enter 0" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="quantity">Number of Children</label>  
  <div class="col-md-4">
  <input id="children" name="children" type="number" placeholder="if not enter 0" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="quantity">Number of Room</label>  
  <div class="col-md-4">
  <input id="room" name="room" type="number" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
<div class="col-md-2 col-md-offset-7">
<button type="submit" class="btn btn-default" name="submit">Submit</button>
</div>
</div>

</fieldset>
</form>
</div>
</div>
<?php include 'footer.php' ?>
</body>


</html>