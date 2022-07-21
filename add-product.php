<?php
include './includes/db.inc.php';
  include './includes/save.inc.php';
  $save=new save();
  $errors=$save->save();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <title>Add-product</title>
</head>
<body>
  
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Product</h5>
   <button type="submit" form="product_form" name="save_btn" class="btn">Save</button>
    <button class="btn"><a href="./" class='p-2 text-dark' >Cancel</a></button>
  </div>
  <div>
    <form action="<?php $save->save()?>" method="post" id="product_form">
        <p class="text-danger"><?php if(isset($errors['data'])) echo $errors['data'];?></p>
        <p class="text-danger"><?php if(isset($errors['SKU'])) echo $errors['SKU'];?></p>
        <p class="text-danger"><?php if(isset($errors['price'])) echo $errors['price'];?></p>
        <p class="text-danger"><?php if(isset($errors['size'])) echo $errors['size'];?></p>
        <p class="text-danger"><?php if(isset($errors['weight'])) echo $errors['weight'];?></p>
        <p class="text-danger"><?php if(isset($errors['furniture'])) echo $errors['furniture'];?></p>
      <div class="form-group row">
        <label class="col-sm-1 col-form-label">SKU</label>
        <div class="col-sm-5">     
          <input type="text" name="sku" id="sku"> 
        </div>
      </div>
        <br>
      <div class="form-group row">
        <label class="col-sm-1 col-form-label">Name</label>
        <div class="col-sm-5"> 
          <input type="text" name="name" id="name">
        </div>
      </div>
        <br>
      <div class="form-group row">
        <label class="col-sm-1 col-form-label">Price($)</label>  
        <div class="col-sm-5">
          <input type="text" name="price" id="price">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-1 col-form-label">Type Switcher</label>  
        <div class="col-sm-5">
          <select type="text" name="productType" id="productType" onchange="select(this.value)">
            <option >DVD</option>
            <option >Furniture</option>
            <option >Book</option>
          </select>
        </div>
      </div>
      <br>
      <div id="DVD" >
        <p>Please, provide size:</p>
      <div class="form-group row" >
        
        <label class="col-sm-1 col-form-label">Size(MB)</label>  
        <div class="col-sm-5">
          <input type="text" name="size" id="size">
        </div>
      </div>
      </div>
      <div id="Book" class="d-none">
        <p>Please, provide weight:</p>
      <div class="form-group row">
        <label class="col-sm-1 col-form-label">Weight(KG)</label>  
        <div class="col-sm-5">
          <input type="text" name="weight" id="weight">
        </div>
      </div>
      </div>
      <div id="Furniture" class="d-none">
      <p>Please, provide dimensions:</p>
        <div class="form-group row" >
          <label class="col-sm-1 col-form-label">Height</label>  
        <div class="col-sm-5">
          <input type="text" name="height" id="height">
        </div>
        </div>
        <div div class="form-group row" >
        <label class="col-sm-1 col-form-label">Width</label>  
        <div class="col-sm-5">
          <input type="text" name="width" id="width">
        </div>
        </div>
        <div class="form-group row" >
        <label class="col-sm-1 col-form-label">Length</label>  
        <div class="col-sm-5">
          <input type="text" name="length" id="length">
        </div>
      </div>
    </div>  
     
    </form>
 
  
  </div>
<script src="js/scripts.js"></script>
</body>
</html>   