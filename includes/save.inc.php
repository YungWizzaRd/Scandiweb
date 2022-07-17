<?php include 'db.inc.php';

    $db=new DB;

 $SKU = $_POST['sku'];
 $Name = $_POST['name'];
 $Price= $_POST['price']; 
 $sql = "INSERT INTO product_form (SKU, Name, Price) VALUES ('$SKU', '$Name', '$Price');"; 
 mysqli_query($db->connect(), $sql);

 header("Location: ../");
 ?>