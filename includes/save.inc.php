<?php include 'db.inc.php';

    $db=new DB;

 $SKU = $_POST['sku'];
 $Name = $_POST['name'];
 $Price= $_POST['price']; 
 $ProductType= $_POST['productType']; 
 $sql = "INSERT INTO product_form (SKU, Name, Price, productType) VALUES ('$SKU', '$Name', '$Price', '$ProductType');"; 
 mysqli_query($db->connect(), $sql);

 header("Location: ../");
 ?>