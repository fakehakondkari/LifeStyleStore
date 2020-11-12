<?php
 require 'includes/commonConnection.php';
?>


<html>
    <head>
        <title>E_Commerce website</title>
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
        
       
        <div id="banner-img" style="padding-top:50px">
            <div class="container">
                <center>
                <div id="banner-content">
                    <?php
                    if(isset($_SESSION['emailid'])){
                        header('location: products.php')   ;
                        
                    }
                    ?>
                    
                    <a href="postLoginProduct.php" class="btn btn-danger btn-lg active">SHOP NOW</a> 
                 </div>
               </center>
            </div> 
            
        </div>
       
        
        
        
        
        
        
        
         <?php
         require 'includes/footer.php';
         ?>
    </body>
</html>

