<?php
class feedback{
    var $email = null;
    var $feedbackId = null;
    var $phone = null;
    var $status = null;

    public function get_list(){
        $db = new connect();
        $select = "select * from feedbacks";
        return $db->pdo_query($select);
    }

    public function update($feedbackId,$status)
    {
        $db = new connect();
        $sql = "UPDATE feedbacks SET `status` = '$status' Where feedbackId = '$feedbackId'";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function get_list_chua_trl(){
        $db = new connect();
        $select = "select * from feedbacks where `status` = 9";
        return $db->pdo_query($select);
    }

    public function add($email, $name, $status,$content){
        $db = new connect();
        $sql = "INSERT INTO `feedbacks`( `email`,  `name`,  `status`,`content`) VALUES ('$email','$name','$status','$content')";
        $result = $db->pdo_execute($sql);
        return $result;
    }
}