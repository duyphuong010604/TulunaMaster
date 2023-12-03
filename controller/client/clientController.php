<?php
class clientValidation
{

    var $username = null;
    var $password = null;
    var $dongy = null;
    var $email = null;
    var $content=null;
   
    var $errors = array();
    public function validation_dangnhap($username, $password, $dongy)
    {
        if (empty($username)) {
            $errors['username'] = 'Vui lòng nhập';
            
        }
        if (empty($password)) {
            $errors['password'] = 'Vui lòng nhập';
            
        }if (empty($dongy)) {
            $errors['dongy'] = 'Vui lòng chọn vào ô trống!';
            
        }

        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }
    public function validation_dangki($username, $password, $dongy , $email)
    {
        if (empty($username)) {
            $errors['username'] = 'Vui lòng nhập';
            
        }
        if (empty($password)) {
            $errors['password'] = 'Vui lòng nhập';
            
        }if (empty($dongy)) {
            $errors['dongy'] = 'Vui lòng chọn vào ô trống!';
            
        }
        if (empty($email)) {
            $errors['email'] = 'Email không hợp lệ!';
            
        }

        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }
    public function validation_quenmatkhau($username, $email)
    {
        if (empty($username)) {
            $errors['username'] = 'Vui lòng nhập';
            
        }
        if (empty($email)) {
            $errors['email'] = 'Email không hợp lệ!';
            
        }

        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }
    public function validation_gopy($name, $email,$content)
    {
        if (empty($name)) {
            $errors['name'] = 'Vui lòng nhập họ và tên!';
            
        }
        if (empty($content)) {
            $errors['content'] = 'Vui lòng nhập nội dung!';
            
        }
        $pattern_email = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (empty($email) || !preg_match($pattern_email, $email)) {
            $errors['email'] = 'Email không hợp lệ!';
            
        }

        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }

    public function validation_binhluan($content)
    {
        if (empty($content) || strlen($content)<8) {
            $errors['content'] = 'Vui lòng nhập nhiều hơn 8 kí tự!';
        }
        
        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }

    public function validation_dathang($username, $address, $dongy , $phone)
    {
        if (empty($username)  || strlen($username)<6) {
            $errors['username'] = 'Vui lòng nhập tên người nhận!';
        }
        if (empty($phone) || strlen($phone) < 9 || !is_numeric($phone) || strlen($phone)>10) {
            $errors['phone'] = "Vui lòng nhập đúng định dạng của thuê bao!";
        }if (empty($dongy)) {
            $errors['dongy'] = 'Vui lòng chọn vào ô trống!';
        }
        if (empty($address) || strlen($address)<=16) {
            $errors['address'] = 'Vui lòng điền địa chỉ cụ thể nhất!';
            
        }
        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }

}





?>