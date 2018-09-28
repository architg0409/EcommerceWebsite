<?php
require "Common.php";
if(!isset($_SESSION['email']))
    header('location:Index.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta name="description" content="Leather Store | Shoes,Jackets and Wallets">
        <meta name="keywords" content="Leather,Shoes,Jackets,Wallets,Store">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Archit Gupta">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css" type="text/css">
    </head>
    <body>
        <?php
        include "Header.php";
        ?>
        <div class="container">
            <div class="row row_style4">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        <?php
                        $user_id=$_SESSION['uid'];
                        $select_query="select A.pid,A.pname,A.price from items A inner join users_items B on A.pid=B.item_id and B.user_id='$user_id'";
                        $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
                        $total_rows= mysqli_num_rows($select_query_result);
                        if($total_rows==0){
                            $sum=0;
                            $ids=array();
                        }
                        else{
                            $sum=0;
                            $ids=array();
                            while($row= mysqli_fetch_array($select_query_result)){
                                $sum=$sum+$row['price'];
                                array_push($ids,$row['pid']);
                                ?>
                        <tr>
                        <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['pname'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><a href="cart-remove.php?id=<?php echo $row['pid'];?>" type="button" class="btn btn-danger">Remove</a></td>
                        </tr>
                        <?php }
                        }$str=implode(",",$ids);?>
                        <tr style="font-weight: bold;" class="active">
                            <td></td>
                            <td>Total</td>
                            <td><?php echo "Rs.".$sum."/-";?></td>
                            <?php if(strlen($str)>0){?>
                            <td><a href="Delivery.php?id=<?php echo $str;?>"><button type="button" class="btn btn-primary">Confirm Order</button></a></td>
                            <?php } else { ?>
                            <td><a href="Delivery.php?id=<?php echo "";?>"><button type="button" class="btn btn-primary">Confirm Order</button></a></td>
                            <?php } ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <?php
        include "Footer.php";
        ?>
    </body>
</html>
