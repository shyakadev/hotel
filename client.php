
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>HOTEL DIRECTORY SYSTEM</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="lib/jquery.tools.js"></script>
<style type="text/css">
form table tr td{
  color: black;
}
form table tr td input[type=text],[type=date],[type=email] {
  border:1px solid #ccc;
  padding: 10px;
  text-align: center;
}
form table tr td select {
  border:1px solid #ccc;
  padding: 10px;
}
form table tr td input[type=submit] {
  border:1px solid #003346;
  padding: 10px;
  border-radius: 8px;
  background-color: #003336;
  cursor: pointer;
  color: white;
}
form table tr td input[type=reset] {
  border:1px solid red;
  padding: 10px;
  border-radius: 8px;
  background-color: red;
  cursor: pointer;
  color: white;
}
</style>
</head>
<body>


<div id="main">
<!-- header begins -->
<div class="top_top"></div>
<div id="header">
	
	<div id="buttons">
      <a href="client.php" class="but but_t"  title="">Home</a><div class="but_razd"></div>
      <a href="client.php"  class="but" title="">Client</a><div class="but_razd"></div>
      <a href="booking.php"  class="but" title="">Booking</a><div class="but_razd"></div>
      <a href="about.php" class="but" title="">About us</a><div class="but_razd"></div>
      <a href="admin.php" class="but" title="">Admin</a><div class="but_razd"></div>
    </div>
	<div id="logo">
    	
    </div>
   <div>
    <center>
    <form style="color:black" method="post" action="connclient.php">
      <table>
        <tr>
          <td>First Name:</td>
          <td> <input type="text" name="fname" placeholder="Your First Name" required /></td>
                  </tr>
                 <tr>
          <td>Last Name:</td>
          <td> <input type="text" name="lname" placeholder="Your Last Name" required /></td>
                  </tr>
  

                <tr>
                <td>
                   gender:</td><td> <select name="gender">
                  <option value="male">male</option>
                  <option value="female">female</option>
                </select></td></tr>
                 <tr>
          <td>Email:</td>
          <td> <input type="email" name="email" placeholder="Email" required /></td>
                  </tr>
                  <tr><td>
                  phone:</td><td> <input type="Text" name="contact" placeholder="Telephone" required=" " /></td>
                  </tr>         

                  <td>City:</td>
          <td> <input type="text" name="city" placeholder="Your City" required /></td>
                  </tr>

                  <td>Country</td>
          <td> <input type="text" name="country" placeholder="Your Country" required /></td>
                  </tr>



          

  
             

 
                  <td><input type="submit" name="save_client" value="Save"></td><td><input type="reset" value="Clear"></td>
                  </tr>
</table>
</form>
</center>
        <div style="clear: both; height:10px"></div>
    </div>  
 </div>  
 <div class="top_bot"></div>  
<!-- bottom end --> 
    <div style="clear: both; height: 1px;"></div>                  
</div>

			<div style="height: 10px"></div>
			<div class="navi"></div> <!-- create automatically the point dor the navigation depending on the numbers of items -->		   
			  
                <div style="clear: both"></div>
   
   </div>  
</div>
<div class="top_bot"></div>
<!-- header ends -->


<!-- content begins -->       

    <!-- content ends --> 

<!-- footer begins -->
            <div id="footer">
          <p>Copyright  2017. <!-- Do not remove -->Designed by <a href="http://www.flashtemplatesdesign.com/" title="willy">willy</a><!-- end --></p>
               
        <!-- footer ends -->
</div>




</body>
</html>
