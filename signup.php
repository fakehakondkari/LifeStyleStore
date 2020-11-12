<?php
 require 'includes/commonConnection.php';
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <title>E_Commerce Signup Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="container-fluid">
        <?php
         require 'includes/headerInclude.php';  
        ?>
        
        
        <div class="container-fluid" style="padding-top: 50px">
            <div>
                <div class="col-xs-6 col-xs-offset-3">
                <div class="panel">
                    <div class="panel-heading"><h1>SignUp</h> </div>
                    <form method="post" action="signup_script_submit.php">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Firstname">
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email_id" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required = "true" pattern=".{6,}">
                        </div>
                        
                        <div class="form-group">
                            <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input  class="btn btn-primary" type="submit" class="form-control" name="submit" placeholder="Submit">
                        </div>
                    </form>
                    
                </div>
                    </div>
                
            </div>
            
        </div>
        
        
        
        
        
        
        
         <?php
         require 'includes/footer.php';
         ?>
    </body>
</html>


