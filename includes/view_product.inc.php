<?php

class ViewProduct extends product{

    public function showProductData(){
        $datas = $this->getProductData();
        if($datas){
         foreach ($datas as $data) {
            echo $data['SKU'];
            echo $data['Name'];
            echo $data['Price'];
            echo $data['productType'];
            if ($data['productType']=='DVD') {
                echo $data['DVDsize'];
            } elseif ($data['productType']=='Book') {
                echo $data['BookWeight'];
            } elseif ($data['productType']=='Furniture') {
                echo $data['FurnitureHeight'];
                echo $data['FurnitureWidth'];
                echo $data['FurnitureLength'];
            }
            echo "<br />";
            }
        }
    }
    
}
?>