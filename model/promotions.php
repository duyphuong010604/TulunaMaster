<?php
class promotion
{
    var $promotionId = null;
    var $name = null;
    var $discount = null;
    var $conditionDiscount = null;
    var $starTime = null;
    var $endTime = null;
    var $promotionType = null;
    var $status = null;



    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT * FROM promotions where
         name not like '%free%'";
        $result = $db->pdo_query($sql);
        return $result;

    }

    public function get_list_client()
    {
        $db = new connect();
        $sql = "SELECT * FROM promotions where status = 1 and name not like '%free%' and endTime - starTime 
        > 0 ";
        $result = $db->pdo_query($sql);
        return $result;

    }

    public function add($name, $discount, $conditionDiscount, $starTime, $endTime, $promotionType, $status)
    {
        $db = new connect();
        $sql = "INSERT INTO `promotions`(`name`, `discount`, `conditionDiscount`, `starTime`, `endTime`, `promotionType`,  `status`) VALUES ('$name','$discount','$conditionDiscount','$starTime','$endTime','$promotionType','$status')";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function CheckName($name)
    {
        $db = new connect();
        $sql = "SELECT name FROM promotions WHERE name LIKE '$name'";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function update($promotionId, $name, $discount, $conditionDiscount, $starTime, $endTime, $promotionType, $status)
    {
        $db = new connect();
        $sql = "UPDATE `promotions` SET `name`='$name',`discount`=$discount,`conditionDiscount`=$conditionDiscount,`starTime`='$starTime',`endTime`='$endTime',`promotionType`=$promotionType,`status`=$status WHERE promotionId = '$promotionId'";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function getBypromotionId($promotionId)
    {
        $db = new connect();
        $sql = "SELECT * FROM promotions WHERE promotionId = $promotionId ";
        $result = $db->pdo_query_one($sql);
        return $result;

    }

    public function getBypromotionName($name)
    {
        $db = new connect();
        $sql = "SELECT * FROM promotions WHERE name LIKE '$name' ";
        $result = $db->pdo_query_one($sql);
        return $result;

    }

    public function getBypromotionToday($promotionId)
    {
        $db = new connect();
        $sql = "SELECT * ,NOW() as 'Today' FROM `promotions` WHERE promotionId = $promotionId ";
        $result = $db->pdo_query_one($sql);
        return $result;

    }

    public function delete($promotionId)
    {
        $db = new connect();
        $sql = "DELETE FROM promotions WHERE promotionId = $promotionId ";
        $retult = $db->pdo_execute($sql);
        return $retult;
    }



}