<?php include 'db.inc.php';

    $db=new DB;

 $SKU = $_POST['sku'];
 $Name = $_POST['name'];
 $Price= $_POST['price']; 
 $ProductType= $_POST['productType']; 
 $Size= $_POST['size']; 
 $Weight= $_POST['weight']; 
 $Height= $_POST['height']; 
 $Width= $_POST['width']; 
 $Length= $_POST['length']; 
if ($ProductType==="DVD") {
    $sql = "INSERT INTO product_form (SKU, Name, Price, productType , DVDsize) VALUES ('$SKU', '$Name', '$Price', '$ProductType', '$Size');";
}
else if($ProductType==="Book"){
    $sql = "INSERT INTO product_form (SKU, Name, Price, productType , BookWeight) VALUES ('$SKU', '$Name', '$Price', '$ProductType', '$Weight');";
}else if($ProductType==="Furniture"){
    $sql = "INSERT INTO product_form (SKU, Name, Price, productType , FurnitureHeight, FurnitureWidth, FurnitureLength) VALUES ('$SKU', '$Name', '$Price', '$ProductType', '$Height', '$Width', '$Length');";
};
 mysqli_query($db->connect(), $sql);

// , DVDsize, BookWeight, FurnitureHeight, FurnitureWidth, FurnitureLength, , '$Size', '$Weight', '$Height', '$Width', '$Length'
 header("Location: ../");
 ?>