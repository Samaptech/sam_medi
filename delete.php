<?php
include('db_con.php');

if(isset($_GET['product_id'])){
    $id = $_GET['product_id'];
    $query = "DELETE from `add-product` where product_id = '$id'  ";
     
    $result = mysqli_query($con , $query);

    if(!$result){
        die("query failed".mysqli_error($result));
    }
    else{
        echo "query successfully Deleted";
        header('location:./add_product_data.php');
    }
}



?>