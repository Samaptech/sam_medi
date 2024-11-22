
<html>
<div>
 <a href="./add_product_data.php" class="btn btn-success justify-content-center m-2" name = "add_product_data.php" >added_product_list</a>
 </div>

</html>


<?php
include('db_con.php');

if(isset($_GET['product_id'])){
    $id = $_GET['product_id'];
    $query = "SELECT * from `add-product` where product_id = '$id'  ";
     
    $result = mysqli_query($con , $query);

    if(!$result){
        die("query failed".mysqli_error($result));
    }
    else{
        
        $row = mysqli_fetch_assoc($result);
                  
    }
}



?>
<?php
echo  "
<div class='container'>
<form action='edit.php?product_id=$id' method='POST'>
<h1 class='text-center'>UPDATE PRODUCT</h1>
<input value='$row[product_id]' type='text' name='product_id' placeholder='PRODUCT ID' class='form-control' style='margin:20px'>               
<input value='$row[product_name]' type='text' name='product_name' placeholder='PRODUCT NAME' class='form-control' style='margin:20px'Required>
<input value='$row[product_formula]' type='text' name='product_formula' placeholder='PRODUCT FORMULA' class='form-control' style='margin:20px'Required>
<input value='$row[product_MRP]' type='text' name='product_MRP' placeholder='PRODUCT MRP' class='form-control' style='margin:20px'Required>
<input value='$row[product_rate]' type='text' name='product_rate' placeholder='PRODUCT RATE' class='form-control' style='margin:20px'Required>
<button class='btn btn-primary text-center' name='update_product'  style='margin:20px' >UPDATE PRODUCT</button>
</form>
</div>

";

if(isset($_POST["update_product"])){
    $product_name = $_POST['product_name'];
    $product_formula = $_POST['product_formula'];
    $product_MRP = $_POST['product_MRP'];
    $product_rate = $_POST['product_rate'];
    $id = $_GET['product_id'];

    $sql = "UPDATE `add-product` SET `product_name`='$product_name', `product_formula`='$product_formula', `product_MRP`='$product_MRP', `product_rate`='$product_rate' WHERE `product_id` = $id";
    $result = mysqli_query($con, $sql);

    if($result){
     // echo "Updated Sucessfully";
      header("location:./add_product_data.php");
     
    }
    else{
      echo "An error occured";
    }

  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <style>

  </style>
  <body>
    

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
 
</html>"

