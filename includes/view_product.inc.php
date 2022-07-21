<?php

class ViewProduct extends product{

    public function showProductData(){
        $datas = $this->getProductData();
        if($datas){
        ?>
        <div class="row m-3">
        
        <?php
         foreach ($datas as $data) {
            ?>
            
           <table class="table col-sm-3 text-center table border table-borderless m-3">
            <tr>
            
                <td><input type="checkbox" class=".delete-checkbox" name="delete_checkboxes[]" value="<?=$data['ID'];?>"></td>
                <td><?=$data['SKU'];?> </td>
  
            </tr>
          
            <tr>
                <td></td>
                <td><?=$data['Name'];?></td>
            </tr>
            <tr>
            <td></td>
                <td><?=$data['Price']; ?> $</td>
            </tr>
            <tr>
            <td></td>
                <td><?=$data['productType'];?></td>
            </tr>
            <?php
            if ($data['productType']=='DVD') {
                
                ?>
                 <tr>
                 <td></td>
                <td>Size: <?=$data['DVDsize'];?> MB</td>
            </tr>
           
           
           <?php
                
            } elseif ($data['productType']=='Book') {
                ?>

                 <tr>
                 <td></td>
                <td>Weight: <?=$data['BookWeight'];?> KG</td>
            </tr>
           
           <?php
                
            } elseif ($data['productType']=='Furniture') {
                ?>
                 <tr>
                 <td></td>
                <td>Dimensions: <?=$data['FurnitureHeight'];?>x<?=$data['FurnitureWidth'];?>x<?=$data['FurnitureLength'];?></td>
            </tr>
           <?php
                
            }
            
         ?>
        </table>
        <?php
        }
        ?>
        </div>
        <?php
        }else{
            ?>

        <div class='d-flex justify-content-center'>
            <H5>NO PRODUCT ADDED</H5>
        </div>

            <?php
        }
    }
    
}
?>