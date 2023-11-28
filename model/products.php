<?php
class product
{
    var $productId = null;
    var $name = null;
    var $image = null;
    var $view = null;
    var $size = null;
    var $description = null;
    var $status = null;
    var $dateUpdate = null;
    var $price = null;
    var $priceSale = null;
    var $fk_categoryId  = null;
    var $fk_brandId = null;


    public function get_list(){
        $db = new connect();
        $sql = "SELECT * FROM products";
        $result = $db->pdo_query($sql);
        return $result;

    }

    public function get_list_brand(){
        $db = new connect();
        $sql = "SELECT * FROM brands";
        $result = $db->pdo_query($sql);
        return $result;

    }

    public function get_list_category(){
        $db = new connect();
        $sql = "SELECT * FROM categorys";
        $result = $db->pdo_query($sql);
        return $result;

    }


    public function get_pricetb(){
        $db = new connect();
        $sql = "SELECT ROUND(SUM(price)/COUNT(productId_sp),0) FROM `products` ";
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function get_pricemin(){
        $db = new connect();
        $sql = "SELECT MIN(price) FROM `products` ";
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function get_pricemax(){
        $db = new connect();
        $sql = "SELECT MAX(price) FROM `products` ";
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function add( $name,$image,$view,$price,$status,$fk_categoryId,$fk_brandId,$size,$description,$dateUpdate){
        $db = new connect();
        $sql = "INSERT INTO products(name, image, view, price,status,fk_categoryId,fk_brandId,description,size,dateUpdate) VALUES ('$name','$image','$view','$price','$status',$fk_categoryId , $fk_brandId, '$description','$size','$dateUpdate')";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function update($productId,$name,$image,$view,$price,$status,$fk_categoryId,$fk_brandId,$size,$description){
        $db=new connect();
        $sql = "UPDATE `products` SET `name`='$name',`image`='$image',`view`='$view',`size`='$size',`price`='$price',`description`='$description',`status`='$status',`fk_categoryId`= '$fk_categoryId' , `fk_brandId` = '$fk_brandId'  Where productId=$productId";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function getByproductId($productId){
        $db = new connect();
        $sql = "SELECT * FROM products WHERE productId = $productId ";
        $result = $db->pdo_query_one($sql);
        return $result;
        
    }

    public function delete($productId){
        $db = new connect();
        $sql = "DELETE FROM products WHERE productId = $productId ";
        $retult = $db->pdo_execute($sql);
        return $retult;
    }

    public function CheckName($name){
        $db = new connect();
        $sql = "SELECT name FROM products WHERE name LIKE '$name'";
        $result = $db->pdo_query_one($sql);
        return $result;
    }
    public function upload(){
        $file = $_FILES['image']['tmp_name'];

            // lay extension cua file 
            $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            // doi ten file thanh thoi gian hien tai 
            $image_name = date('YmdHis') . '.' . $image_ext;

            // cau hinh duong dan de di chuyen file 
            $path = "../Admin_DUAN1/uploads/products/" . $image_name;

            $kq = move_uploaded_file($file, $path);
            if ($kq) {     
                $result =  $image_name;         
            }else{
                $result = 0;
            }
            return $result;
    }
}