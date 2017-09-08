<?php include 'head.php' ?>
<body>
<?php include 'header.php'; ?>
<div style="margin-bottom: 5%">
</div>
  	<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Admin's Panel</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="#section1">Booked</a></li>
        <li class="active"><a href="#section2">Add Hotel</a></li>
                      </ul><br>
         </div>
  		<div class="col-md-9 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Edit name's Book
	</div>
	<div class="panel-body">
	<div class="container-fluid">
<form class="form-horizontal" action="book.php" method="post">
<fieldset>

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

<div class="form-group">
  <label class="col-md-4 control-label" for="hotelname">Hotel Name</label>
  <div class="col-md-4">
    <select id="hotelname" name="hotelname" class="form-control">
      <option value="1">hotelname</option>
                </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="roomtype">Room Type</label>
  <div class="col-md-4">
    <select id="roomtype" name="roomtype" class="form-control">
      <option value="1">roomtype</option>
                </select>
  </div>
</div>



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
<button type="submit" class="btn btn-primary" name="submit">Update</button>
</div>
</div>

</fieldset>
</form>

  </div>
  </div>