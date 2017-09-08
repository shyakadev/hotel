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
		Add New Hotel
	</div>
	<div class="panel-body">
	<div class="container-fluid">
  <form class="form-horizontal" action="addhot.php" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hotelname">Hotel Name</label>  
  <div class="col-md-4">
  <input id="hotelname" name="hotelname" type="text" placeholder="Your First Name" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Image</label>  
  <div class="col-md-4">
  <input id="image" name="image" type="file" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>  
  <div class="col-md-4">
<textarea class="form-control" rows="5" id="description" name="description"></textarea>    
  </div>
</div>
<div class="form-group">
<div class="col-md-2 col-md-offset-7">
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
</div>



</fieldset>
</form>
  </div>
  </div>