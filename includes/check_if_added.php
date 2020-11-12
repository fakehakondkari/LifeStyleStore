<?php
require 'includes/commonConnection.php';

check_if_added_to_cart($item_id);
{
 $status="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";   
}
if(mysqli_num_rows($status)>=1){
    return 1;
}else{
    return 0;
}
?>

