<?php

require "connection.php";

class UserModel extends database{
    public function create($productData,$files){

        $productName = $productData['product_name'];
        move_uploaded_file($files["tmp_name"],"images/" .$files["name"]);
        $imagePath= "images/".$files["tmp_name"];
        $sku = $productData['sku'];
        $price = $productData['price'];
        $mfg = $productData['mfg'];
        $availability = $productData['availability'];

        $this->db->query("INSERT INTO product_details(product_name,product_image,sku_input,price,manufacture,Available_stock)
 VALUES ('$productName','$imagePath','$sku','$price','$mfg','$availability')");
    }
    public function listOfAll(){
        $statement = $this->db->query("SELECT * FROM product_details");
        $getdata = $statement->fetchAll(PDO::FETCH_OBJ);
        return $getdata;
    }
    public function delete($id){
        $this->db->query("DELETE FROM product_details WHERE id = '$id'");
    }
    public function read($id)
    {
        $getDta = $this->db->query("SELECT * FROM details WHERE id = '$id'");
        $objData = $getDta->fetchAll(PDO::FETCH_OBJ);
        return $objData;
    }
    public function update($details, $ids) {
        $productname = $details['product_name'];
        move_uploaded_file($details["tmp_name"],"images/".$ids["name"]);
        $imagePath= "images/".$ids["tmp_name"];
        $skuinput = $details['sku'];
        $price = $details['price'];
        $mfg = $details['mfg'];
        $availability = $details['availability'];
        $this->db->query("UPDATE product_details SET product_name = '$productname', product_image='$imagePath',sku_input = '$skuinput',price='$price',manufacture='$mfg',Available_stock='$availability' 
 WHERE id='$ids'");
    }


}