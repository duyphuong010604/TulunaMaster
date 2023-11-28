<?php
session_start();
//Các url cần thiết cho toàn bộ website
$ROOT_URL = "/Admin_DUAN1"; //sửa 
$VIEW_URL="$ROOT_URL/view";
$CONTROLLER_URL = "$ROOT_URL/controller";
$MODEL_URL = "$ROOT_URL/model";
$CONTENT_URL = "$ROOT_URL/contents";
$ADMIN_URL = "$VIEW_URL/admin";
$CLIENT_URL = "$VIEW_URL/client";
$UPLOAD_IMG_URL =  "$ROOT_URL/uploads";

//Hàm cho upload file 

class upload
{
    var $hinhanh = null;
    // $hinhanh = $_FILES['hinhanh']['tmp_name'];
    public function upload_img_pr()
    {
        $file = $_FILES['hinhanh']['tmp_name'];
        // lay extension cua file 
        $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);
        // doi ten file thanh thoi gian hien tai 
        $image_name = date('YmdHis') . '.' . $image_ext;
        // cau hinh duong dan de di chuyen file 
        $path = "uploads/images-product/" . $image_name;
        $kq = move_uploaded_file($file, $path);
        if ($kq) {
            $result = $image_name;
        } else {
            $result = 0;
        }
        return $result;
    }

    public function upload_img_user()
    {
        $file = $_FILES['hinhanh']['tmp_name'];
        // lay extension cua file 
        $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);
        // doi ten file thanh thoi gian hien tai 
        $image_name = date('YmdHis') . '.' . $image_ext;
        // cau hinh duong dan de di chuyen file 
        $path = "uploads/images-user/" . $image_name;
        $kq = move_uploaded_file($file, $path);
        if ($kq) {
            $result = $image_name;
        } else {
            $result = 0;
        }
        return $result;
    }

    public function upload_img_admin()
    {
        $file = $_FILES['hinhanh']['tmp_name'];
        // lay extension cua file 
        $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);
        // doi ten file thanh thoi gian hien tai 
        $image_name = date('YmdHis') . '.' . $image_ext;
        // cau hinh duong dan de di chuyen file 
        $path = "uploads/images-admin/" . $image_name;
        $kq = move_uploaded_file($file, $path);
        if ($kq) {
            $result = $image_name;
        } else {
            $result = 0;
        }
        return $result;
    }

    public function upload_img_br()
    {
        $file = $_FILES['hinhanh']['tmp_name'];
        // lay extension cua file 
        $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);
        // doi ten file thanh thoi gian hien tai 
        $image_name = date('YmdHis') . '.' . $image_ext;
        // cau hinh duong dan de di chuyen file 
        $path = "uploads/images-background/" . $image_name;
        $kq = move_uploaded_file($file, $path);
        if ($kq) {
            $result = $image_name;
        } else {
            $result = 0;
        }
        return $result;
    }

    public function upload_img_blog()
    {
        $file = $_FILES['hinhanh']['tmp_name'];
        // lay extension cua file 
        $image_ext = pathinfo($_FILES['hinhanh']['name'], PATHINFO_EXTENSION);
        // doi ten file thanh thoi gian hien tai 
        $image_name = date('YmdHis') . '.' . $image_ext;
        // cau hinh duong dan de di chuyen file 
        $path = "uploads/images-blog/" . $image_name;
        $kq = move_uploaded_file($file, $path);
        if ($kq) {
            $result = $image_name;
        } else {
            $result = 0;
        }
        return $result;
    }
}

//Cookie

class cookie {
    var $name = null; 
    var $value = null;
    var $day = null;
    //thêm cookie
    public function add_cookie($name, $value, $day){
        setcookie($name, $value, time() +(8400 * $day),"/");
    }
    //xóa cookie
    public function delete_cookie($name){
        setcookie($name," ",-1);
    }
    //đọc cookie
    public function get_cookie($name){
        return $_COOKIE[$name]??"";
    }
}

//Hàm kiểm tra validation 










