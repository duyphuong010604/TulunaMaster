<?php
class brand{
    var $brandId = null;
    var $name = null;
    var $image = null;
    var $origin=null;
    var $status = null;

    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT  * FROM brands";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById($brandId)
    {
        $db = new connect();
        $sql = "SELECT * FROM brands WHERE brandId = $brandId ";
        $result = $db->pdo_query_one($sql);
        return $result;

    }

    public function add($name, $status,$image,$origin)
    {
        
        $db = new connect();
        $sql = "INSERT INTO brands(name,status,image,origin) VALUES ('$name','$status','$image','$origin') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function update($brandId, $name, $status, $image,$origin)
    {
        $db = new connect();
        $sql = "UPDATE brands SET name='$name',status='$status' , image = '$image' , origin = '$origin' Where brandId=$brandId";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function delete($brandId)
    {
        $db = new connect();
        $sql = "DELETE FROM brands WHERE brandId = $brandId ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function CheckName($name){
        $db = new connect();
        $sql = "SELECT name FROM brands WHERE name LIKE '$name'";
        $result = $db->pdo_query_one($sql);
        return $result;
    }
    
   
    // public function dem_sp($truyvan)
    // {
    //     $db = new connect();
    //     $sql = "$truyvan";
    //     $result = $db->pdo_query_value($sql);
    //     return $result;

    // }

    public function upload(){
        $file = $_FILES['image']['tmp_name'];

            // lay extension cua file 
            $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            // doi ten file thanh thoi gian hien tai 
            $image_name = date('YmdHis') . '.' . $image_ext;

            // cau hinh duong dan de di chuyen file 
            $path = "../Admin_DUAN1/uploads/brands/" . $image_name;

            $kq = move_uploaded_file($file, $path);
            if ($kq) {     
                $result =  $image_name;         
            }else{
                $result = 0;
            }
            return $result;
    }
}