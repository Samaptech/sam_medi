<?php
include('db_con.php');

if(isset($_POST['update_product'])){
if(isset($_GET['product_id'])){

  $product_id = $_POST['product_id'];
  $product_name = $_POST['product_name'];
  $product_formula = $_POST['product_formula'];
  $product_MRP = $_POST['product_MRP'];
  $product_rate = $_POST['product_rate'];

  $id = $_GET['product_id'];
  echo $id;

}  

}



?>
 
