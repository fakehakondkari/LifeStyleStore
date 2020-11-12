<?php
require 'includes/commonConnection.php';

$name=$_POST['name'];
$emailid=$_POST['emailid'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(!preg_match($regex_email,$emailid)){
    echo"Incorrect email";
}
$password=$_POST['password'];
if(strlen($password)<6){
    echo 'pasword should have at-least 6 characters';
}
$emailid= mysqli_escape_string($con, $emailid);
$password= mysqli_escape_string($con, $password);

$contact= mysqli_escape_string($con, $_POST['contact']) ;
$city= mysqli_escape_string($con,$_POST['city']);
$address=mysqli_escape_string($con,$_POST['address']);

$select_id_dupCheck="SELECT id emailid from users WHERE $emailid=`emailid`";

                                                     
$resultprn= mysqli_query($connect, $select_id_dupCheck);
$num= @mysqli_num_rows($resultprn);

if($num>0){
    
    echo 'email id already exists.';
}else{
    $insert_query="INSERT INTO store.users(name,emailid,password,contact,city,address)VALUES('$name','$emailid','$password','$contact','$city','$address')";
    mysqli_insert_id($con);
    
    $user_regitration_submit=mysqli_query($con,$insert_query)
or die(mysqli_errno($con));

}


session_start();

 
  if(isset($_SESSION['emailid'])){
                        header('location: products.php')   ;
                        
                    }

?>

