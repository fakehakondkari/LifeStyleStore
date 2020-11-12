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
        
<!--       table creation  -->

<div class="container" style="padding-top: 60px">
    <center>
    
    <table border="2 solid">
        <thead>
            <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>_</td>
                <td>_</td>
                <td>_</td>
                <td> _</td>
            </tr>
             <tr>
                <td></td>
                <td>Total</td>
                <td>0</td>
                <td><button class="btn btn-primary btn-block " style="padding: 1px"> confirm order</button></td>
            </tr>
        </tbody>
        
        
    </table>
    </center>
</div>

        

        
        
<!--      footer  -->
         <?php
         require 'includes/footer.php';
         ?>
    </body>
</html>


