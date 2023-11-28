<?php
class clientValidation
{

    var $username = null;
    var $password = null;
    var $dongy = null;
    var $email = null;
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
            header('location: index.php?atc=home');
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
            header('location: index.php?atc=home');
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
            header('location: index.php?atc=home');
        }
        return $errors;
    }
    public function validation_gopy($username, $email)
    {
        if (empty($username)) {
            $errors['username'] = 'Vui lòng nhập';
            
        }
        if (empty($email)) {
            $errors['email'] = 'Email không hợp lệ!';
            
        }

        if (empty($errors)) {
            header('location: index.php?atc=home');
        }
        return $errors;
    }

}





?>