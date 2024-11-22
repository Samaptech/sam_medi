<html>
<div>
 <a href="./add_product.php" class="btn btn-success justify-content-center m-2" name = "add_product.php" >add_product</a>
 </div>

</html>

<?php 
include('db_con.php');

if(isset($_POST['add_product'])){
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_formula = $_POST['product_formula'];
    $product_MRP = $_POST['product_MRP'];
    $product_rate = $_POST['product_rate'];

    $query = "INSERT INTO `add-product` ( `product_name`, `product_formula`, `product_MRP`, `product_rate`) VALUES ( '$product_name', '$product_formula', '$product_MRP', '$product_rate')";
    
    $result = mysqli_query($con , $query);

    if(!$result){
            echo "query failed";
    }
    else{
       // echo "query succesfully inserted";
    }
}
?>









<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
    <h1 class="text-center">PRODUCTS LIST</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr >
                <th>PRODUCTS ID</th>
                <th>PRODUCTS NAMES</th>
                <th>PRODUCTS FORMULA</th>
                <th>PRODUCTS MRP</th>
                <th>PRODUCTS RATES</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <?php
include('db_con.php');

$query = "SELECT * FROM `add-product`";
$result = mysqli_query($con , $query);

if(!$result){
    die("query failed".mysqli_error());
}
else{
    while ($row = mysqli_fetch_assoc($result)) {
        echo"
                
        <tbody>
        <tr>
            <td>{$row['product_id']}</td>   <!-- Replace 'product_id' with the actual column name -->
            <td>{$row['product_name']}</td> <!-- Replace 'product_name' with the actual column name -->
            <td>{$row['product_formula']}</td> <!-- Replace 'product_formula' with the actual column name -->
            <td>{$row['product_MRP']}</td>  <!-- Replace 'mrp' with the actual column name -->
            <td>{$row['product_rate']}</td>  <!-- Replace 'rate' with the actual column name -->
            <td>
                <a href='./edit.php?product_id={$row['product_id']}' class='btn btn-primary m-2'>Edit</a>
                <a href='./delete.php?product_id={$row['product_id']}' class='btn btn-danger m-2'>Delete</a>
            </td>
            </tr>
       </tbody>

        ";
    }
    
        
        } 


?>      


</table>





























