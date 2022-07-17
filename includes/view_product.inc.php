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
                echo $data['DVD size'];
            } elseif ($data['productType']=='Book') {
                echo $data['Book Weight	'];
            } elseif ($data['productType']=='Furniture') {
                echo $data['Furniture Height'];
                echo $data['Furniture Width'];
                echo $data['Furniture LengtH'];
            }
            echo "<br />";
            }
        }
    }
    
}
?>