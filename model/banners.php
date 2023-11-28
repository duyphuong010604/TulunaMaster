<?php
class banner{
    var $bannerId = null;
    var $title = null;
    var $image = null;
    var $content=null;
    var $status = null;

    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT * FROM banners";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById($bannerId)
    {
        $db = new connect();
        $sql = "SELECT * FROM banners WHERE bannerId = $bannerId ";
        $result = $db->pdo_query_one($sql);
        return $result;

    }

    public function add($title,$status,$image,$content)
    {
        
        $db = new connect();
        $sql = "INSERT INTO banners(title,status,image,content) VALUES ('$title','$status','$image','$content') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function update($bannerId, $title, $status,$image,$content)
    {
        $db = new connect();
        $sql = "UPDATE banners SET title='$title',status='$status' , image = '$image' , content = '$content' Where bannerId=$bannerId";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function delete($bannerId)
    {
        $db = new connect();
        $sql = "DELETE FROM banners WHERE bannerId = $bannerId ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    
    public function upload(){
        $file = $_FILES['image']['tmp_name'];

            // lay extension cua file 
            $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            // doi ten file thanh thoi gian hien tai 
            $image_name = date('YmdHis') . '.' . $image_ext;

            // cau hinh duong dan de di chuyen file 
            $path = "../Admin_DUAN1/uploads/banners/" . $image_name;

            $kq = move_uploaded_file($file, $path);
            if ($kq) {     
                $result =  $image_name;         
            }else{
                $result = 0;
            }
            return $result;
    }
}