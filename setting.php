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
        
<!--       setings conainer -->

<div class="container" style="padding: 60px">
   <div>
                <div class="col-xs-6 col-xs-offset-3">
        <div class="panel">
    <div class="panel-heading">
        <h2>Change settings</h2>
    </div>
        <form>
            <div class="form-group">
                <input type="password"  class="form-control" name="oldpassword" placeholder="Enter your old password">
            </div>
            
            <div class="form-group">
                <input type="password"  class="form-control" name="newpassword" placeholder="Enter your new password">
            </div>
            
            <div class="form-group">
                <input type="password"  class="form-control" name="retype-newpassword" placeholder="Re_type new password">
            </div>
            
            <div class="form-group">
                <input type="submit"  class="form-control btn btn-primary " name="submit" placeholder="Submit">
            </div>
        </form>
        
    </div>
    
    </div>
   </div>
</div>

        

        
        
<!--      footer  -->
          <?php
         require 'includes/footer.php';
         ?>
    </body>
</html>


