<?php include 'head.php' ?>
<body>
<?php include 'header.php'; ?>
<div style="margin-bottom: 20%">
</div>

        <div class="container col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
            <br />
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h1>Login</h1>
                </div>
                <div class="panel-body">
                <form method="post" action="admin.php">
                    <div class="form-group">
                       <!-- <div class="input-group">-->
                            <input id="user" type="text" class="form-control" name="user" placeholder="username" required="" />
                       
                    </div>
                    <div class="form-group">
                  
                       <input id="pass" type="password" class="form-control" name="password" placeholder="password" required="" />
                        
                    </div>
                    <input type="submit" name="login" class="btn btn-success" style="float: right;">
                                    </div>
            </div>
        </div>

        </body>
        </html>