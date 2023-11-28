<?php
class user
{
    var $userId = null;
    var $username = null;
    var $password = null;
    var $email = null;
    var $fullname = null;
    var $image = null;
    var $phone = null;
    var $status = null;
    var $address = null;


    public function get_list(){
        $db = new connect();
        $sql = "SELECT * FROM users";
        $result = $db->pdo_query($sql);
        return $result;

    }

    public function add($username, $password, $email, $fullname, $image, $phone, $status, $address){
        $db = new connect();
        $sql = "INSERT INTO `users`(`username`, `password`, `email`, `fullname`, `image`, `phone`, `address`, `status`) VALUES ('$username','$password','$email','$fullname','$image','$phone','$address','$status')";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function CheckName($username){
        $db = new connect();
        $sql = "SELECT username FROM users WHERE username LIKE '$username'";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function update($userId,$username, $password, $email, $fullname, $image, $phone, $status, $address){
        $db=new connect();
        $sql = "UPDATE `users` SET `username`='$username',`password`='$password',`email`='$email',`fullname`='$fullname',`image`='$image',`phone`='$phone',`address`='$address',`status`='$status' WHERE userId = '$userId'";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function getByuserId($userId){
        $db = new connect();
        $sql = "SELECT * FROM users WHERE userId = $userId ";
        $result = $db->pdo_query_one($sql);
        return $result;
        
    }

    public function delete($userId){
        $db = new connect();
        $sql = "DELETE FROM users WHERE userId = $userId ";
        $retult = $db->pdo_execute($sql);
        return $retult;
    }
    public function upload(){
        $file = $_FILES['image']['tmp_name'];

            // lay extension cua file 
            $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            // doi ten file thanh thoi gian hien tai 
            $image_name = date('YmdHis') . '.' . $image_ext;

            // cau hinh duong dan de di chuyen file 
            $path = "../Admin_DUAN1/uploads/users/" . $image_name;

            $kq = move_uploaded_file($file, $path);
            if ($kq) {     
                $result =  $image_name;         
            }else{
                $result = 0;
            }
            return $result;
    }


}