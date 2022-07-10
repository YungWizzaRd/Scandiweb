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
    <button type="submit" class="btn" form="#product_form">Save</button>
    <button class="btn"><a href="../Scandiweb/" class='p-2 text-dark' >Cancel</a></button>
  </div>
  <div>
    <form action="save.php" method="post" id="#product_form">
      <div class="form-group row">
        <label class="col-sm-1 col-form-label">SKU</label>
        <div class="col-sm-5">     
          <input type="text" name="#sku)">
        </div>
      </div>
        <br>
      <div class="form-group row">
        <label class="col-sm-1 col-form-label">Name</label>
        <div class="col-sm-5"> 
          <input type="text" id="#name">
        </div>
      </div>
        <br>
      <div class="form-group row">
        <label class="col-sm-1 col-form-label">Price($)</label>  
        <div class="col-sm-5">
          <input type="text" id="#price">
        </div>
      </div>
      <div class>
    </form>
  </div>
</body>
</html>