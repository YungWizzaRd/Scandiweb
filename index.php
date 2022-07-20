<?php
include './includes/db.inc.php';
include './includes/product.inc.php';
include './includes/view_product.inc.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Product List</title>
    
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Product list</h5>
       <button class="btn"><a href="../Scandiweb/add-product" class='p-2 text-dark' >ADD</a></button>
        <button type="submit" form="delete" class="btn">MASS DELETE</button>
  </div>
 
  </div class=form>
  <form>
    <?php
    
    $product= new ViewProduct();
    $product->showProductData();
    ?>
    </form>
  </div>
</body>

</html>