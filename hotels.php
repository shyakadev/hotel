<?php include 'head.php' ?>
<body>
<?php include 'header.php' ?>
<div style="padding-top:80px"></div>
<div class="container row text-center col-md-offset-3">
<?php include 'availability.php' ?>
</div>
<div class="container">
<div class="row">
<div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                  <img class="responsive" src="resources/images/karisimbi.jpg">                </div>
                <div class="panel-body">
                      <h2>Karisimbi</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in leo augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin dolor tortor, bibendum faucibus ipsum dapibus, aliquam efficitur ex. Donec odio dui, dapibus eget mi non, rutrum ultricies est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer at justo facilisis ipsum convallis fringilla eu vitae nisl. </p>
                </div>
                <div>
                <form method="post" action="rooms.php">
                <input type="hidden" name="hotel" value="karisimbi">
                <input class="btn btn-info" style="float: right;" type="submit" name="action" value="Rooms" />  </form>              </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                  <img class="responsive" src="resources/images/virunga.jpg">                </div>
                <div class="panel-body">
                      <h2>Muhabura</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in leo augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin dolor tortor, bibendum faucibus ipsum dapibus, aliquam efficitur ex. Donec odio dui, dapibus eget mi non, rutrum ultricies est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer at justo facilisis ipsum convallis fringilla eu vitae nisl. </p>
                </div>
                <div>
         <form method="post" action="rooms.php">
                <input type="hidden" name="hotel" value="muhabura">
                <input class="btn btn-info" style="float: right;" type="submit" name="action" value="Rooms" />  </form>                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                  <img class="responsive" src="resources/images/muhabura.jpg">                </div>
                <div class="panel-body">
                      <h2>Virunga</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in leo augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin dolor tortor, bibendum faucibus ipsum dapibus, aliquam efficitur ex. Donec odio dui, dapibus eget mi non, rutrum ultricies est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer at justo facilisis ipsum convallis fringilla eu vitae nisl. </p>
                </div>
                <div>
               <form method="post" action="rooms.php">
                <input type="hidden" name="hotel" value="virunga">
                <input class="btn btn-info" style="float: right;" type="submit" name="action" value="Rooms" />  </form>                </div>
            </div>
        </div>

        </div>
        </div>
        <?php include 'footer.php' ?>
        </body>
