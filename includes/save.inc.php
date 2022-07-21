<?php
class save extends DB
{
    public $errors=[];
    public function save()
    {
        if(isset($_POST['save_btn']))
        {
            $SKU = $_POST['sku'];
            $Name = $_POST['name'];
            $Price= $_POST['price'];
            $ProductType= $_POST['productType'];
            $Size= $_POST['size'];
            $Weight= $_POST['weight'];
            $Height= $_POST['height'];
            $Width= $_POST['width'];
            $Length= $_POST['length'];


            $check="SELECT SKU FROM product_form WHERE SKU='$SKU'";
            $checkDo=mysqli_query($this->connect(), $check);

            if (mysqli_num_rows($checkDo)>0) {
                $this->addError('SKU','Product with this SKU already exists');
                
            }elseif (empty($SKU)||empty($Name)||empty($Price)){

                $this->addError('data','Please, submit required data');
                

            } elseif(!is_numeric($Price)){

                $this->addError('price','Price should be written as number!');

            }else {
                if ($ProductType==="DVD") {
                    if (empty($Size)) {
                        $this->addError('data','Please, submit required data');
                        
                    }else{
                        
                        $sql = "INSERT INTO product_form (SKU, Name, Price, productType , DVDsize) VALUES ('$SKU', '$Name', '$Price', '$ProductType', '$Size');";
                        mysqli_query($this->connect(), $sql);

                        header("Location: ./");
                    }

                } elseif ($ProductType==="Book") {
                    if (empty($Weight)) {

                        $this->addError('data','Please, submit required data');
                       
                    } elseif(!is_numeric($Weight)){
                         $this->addError('weight','Weight should be written as number!');
        
                    }else{
                        
                       
                        $sql = "INSERT INTO product_form (SKU, Name, Price, productType , BookWeight) VALUES ('$SKU', '$Name', '$Price', '$ProductType', '$Weight');";
                        mysqli_query($this->connect(), $sql);

                        header("Location: ./");
                        
                    }
                } elseif ($ProductType==="Furniture") {
                    if (empty($Height)||empty($Width)||empty($Length)) {

                        $this->addError('data','Please, submit required data');
                        
                    }elseif(!is_numeric($Width)||!is_numeric($Length)||!is_numeric($Height)){

                        $this->addError('furniture','Furniture sizes should be written as number!');
        
                    }else{
                        $sql = "INSERT INTO product_form (SKU, Name, Price, productType , FurnitureHeight, FurnitureWidth, FurnitureLength) VALUES ('$SKU', '$Name', '$Price', '$ProductType', '$Height', '$Width', '$Length');";
                        mysqli_query($this->connect(), $sql);

                        header("Location: ./");
                        
                        
                    }
                }
            }
            return $this->errors;
            
            
        }
    }

    private function addError($key, $val){
        $this->errors[$key]=$val;
    }
}
?>