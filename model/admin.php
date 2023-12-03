<?php

class Admin
{
    var $Id = null;
    var $username = null;
    var $password = null;
    var $fullName = null;
    var $email = null;
    var $image = null;
    var $address = null;
    var $phone = null;
    


    function getUser()
    {
        $db = new connect();
        $select = "select * from admin";
        return $db->pdo_query($select);
    }
    public function checkUser($username, $password)
    {
        $db = new connect();
        $select = "select * from admin where username='$username' and password='$password'";
        $result = $db->pdo_query_one($select);
        if ($result != null)
            return true;
        else
            return false;
    }

    public function userid($username, $password)
    {
        $db = new connect();
        $select = "select adminId from admin where username='$username' and password='$password'";
        $result = $db->pdo_query_one($select);
        return $result;
    }

    public function checkEmail_User($username, $email){
        $db = new connect();
        $select = "select adminId from admin where username='$username' and email='$email'";
        $result = $db->pdo_query_one($select);
        return $result;
    }

    public function Checkuserid($username, $email)
    {
        $db = new connect();
        $select = "select adminId from admin where username='$username' and email='$email'";
        $result = $db->pdo_query_value($select);
        return $result;
    }

    
}
