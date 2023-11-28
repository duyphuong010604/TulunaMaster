<?php
class category{
    var $categoryId = null;
    var $name = null;
    var $image = null;
    var $image1=null;
    var $status = null;

    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT * FROM categorys";
        $result = $db->pdo_query($sql);
        return $result;
    }

   

    public function getById($categoryId)
    {
        $db = new connect();
        $sql = "SELECT * FROM categorys WHERE categoryId = $categoryId ";
        $result = $db->pdo_query_one($sql);
        return $result;

    }

    public function add($name, $status,$image)
    {
        
        $db = new connect();
        $sql = "INSERT INTO categorys(name,status,image) VALUES ('$name','$status','$image') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function update($categoryId, $name, $status, $image)
    {
        $db = new connect();
        $sql = "UPDATE categorys SET name='$name',status='$status' , image = '$image' Where categoryId=$categoryId";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function delete($categoryId)
    {
        $db = new connect();
        $sql = "DELETE FROM categorys WHERE categoryId = $categoryId ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function CheckName($name){
        $db = new connect();
        $sql = "SELECT name FROM categorys WHERE name LIKE '$name'";
        $result = $db->pdo_query_one($sql);
        return $result;
    }
    
   
    public function dem_sp($truyvan)
    {
        $db = new connect();
        $sql = "$truyvan";
        $result = $db->pdo_query_value($sql);
        return $result;

    }

    public function upload(){
        $file = $_FILES['image']['tmp_name'];

            // lay extension cua file 
            $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            // doi ten file thanh thoi gian hien tai 
            $image_name = date('YmdHis') . '.' . $image_ext;

            // cau hinh duong dan de di chuyen file 
            $path = "../Admin_DUAN1/uploads/categorys/" . $image_name;

            $kq = move_uploaded_file($file, $path);
            if ($kq) {     
                $result =  $image_name;         
            }else{
                $result = 0;
            }
            return $result;
    }
}