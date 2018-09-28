<?php
function check_if_added_to_cart($item_id)
{
    $con=mysqli_connect("localhost","root","architgupta97","lstore") or die(mysqli_error($con));
    $user_id=$_SESSION['uid'];
    $select_query="select * from users_items where item_id='$item_id' and user_id='$user_id'and status='Added to Cart'";
    $select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
    $total_rows=mysqli_num_rows($select_query_result);
    if($total_rows>=1)
        return 1;
    else
        return 0;
}
?>
