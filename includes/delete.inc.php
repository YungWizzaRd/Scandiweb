<?php

class delete extends DB
{

    



    public function delete()
    {
        if (isset($_POST['delete_btn'])) {
            $allSKU= $_POST['delete_checkboxes'];
            $extractSKU = implode(',', $allSKU);


            $sql="DELETE FROM product_form WHERE ID IN($extractSKU)";
            mysqli_query($this->connect(), $sql);

            header("Location: ./");
        }
    }
}

?>