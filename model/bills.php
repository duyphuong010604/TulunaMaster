<?php
class bill
{
    var $billId = null;
    var $paymentType = null;
    var $username = null;
    var $dateCreated = null;
    var $priceReduced = null;
    var $totalBill = null;
    var $address = null;
    var $fk_userId = null;
    var $fk_promotionId = null;
    var $phone = null;



    public function add($username, $phone, $address, $priceReduced, $totalBill, $paymentType, $fk_userId, $fk_promotionId)
    {

        $db = new connect();
        $sql = "INSERT INTO bills(username, phone, address, priceReduced, totalBill, paymentType, fk_userId, fk_promotionId) VALUES ('$username', '$phone','$address', '$priceReduced', '$totalBill', '$paymentType', '$fk_userId', '$fk_promotionId') ";
        $result = $db->pdo_get_connection();
        $result->exec($sql);
        $billId = $result->lastInsertId();
        return $billId;
    }

    public function add_billDetail($billId, $productId, $quantity, $price, $note)
    {

        $db = new connect();
        $sql = "INSERT INTO billdetails(DbillId , DproductId , quantity, price, note) VALUES ('" . $billId . "','" . $productId . "','" . $quantity . "','" . $price . "','" . $note . "') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT BI.billId, BI.totalBill,SUM(BD.quantity) AS 'TONGSOLUONG', BI.dateCreated
        FROM `bills` BI INNER JOIN billdetails BD ON BD.DbillId = BI.billId 
        INNER JOIN products PD ON PD.productId = BD.DproductId
        INNER JOIN users US ON US.userId = BI.fk_userId
        INNER JOIN promotions PR ON PR.promotionId = BI.fk_promotionId
        GROUP BY BI.billId,BI.totalBill,'TONGSOLUONG'";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById($billId)
    {
        $db = new connect();
        $sql = "SELECT BI.billId,BI.username,BI.phone,BI.address,BI.priceReduced,BI.totalBill,BI.paymentType,BI.dateCreated,
        BD.note,PD.productId,PD.name,BD.quantity,PD.price,BI.fk_promotionId,PR.name AS 'MA'
        FROM `bills` BI INNER JOIN billdetails BD ON BD.DbillId = BI.billId 
        INNER JOIN products PD ON PD.productId = BD.DproductId
        INNER JOIN users US ON US.userId = BI.fk_userId
        INNER JOIN promotions PR ON PR.promotionId = BI.fk_promotionId
        where BI.billId = $billId";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function get_list_productInBill($billId)
    {
        $db = new connect();
        $sql = "SELECT PD.name, PD.price, BI.quantity FROM `billdetails` BI 
        INNER JOIN products PD ON PD.productId = BI.DproductId WHERE DbillId = $billId";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getById_lichsu($billId)
    {
        $db = new connect();
        $sql = "SELECT  BI.billId, BI.totalBill, BI.priceReduced, SUM(BD.quantity) AS 'TONGSOLUONG', BI.address, BI.dateCreated FROM `bills` BI INNER JOIN billdetails BD on BD.DbillId = billId WHERE BI.fk_userId = $billId
        GROUP BY  BI.billId, BI.totalBill, BI.priceReduced, BI.address, BI.dateCreated";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function getBy_SumTotalBill()
    {
        $db = new connect();
        $sql = "SELECT SUM(totalBill) AS 'TONGGIABILL' FROM `bills` ";
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function getBy_SumQuantity()
    {
        $db = new connect();
        $sql = "SELECT SUM(quantity) AS 'TONGSOSP' FROM `billDetails` ";
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    

    public function getBy_TopTotalBill_user()
    {
        $db = new connect();
        $sql = "SELECT US.username, Sum(totalBill) as 'TONGCUAUSER' FROM `users` US
        INNER JOIN bills BI ON BI.fk_userId = US.userId
        GROUP by US.username LIMIT 1
                ";
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function get_CountBillDay()
    {
        $db = new connect();
        $sql = "SELECT MIN(DATE(dateCreated)) AS 'BD',MAX(DATE(dateCreated)) AS 'KT', DATEDIFF(MAX(DATE(dateCreated)) , MIN(DATE(dateCreated)))+1 AS 'TONGSONGAY' FROM `bills`  
        ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function get_bangcot()
    {
        $db = new connect();
        $sql = "SELECT DATE(dateCreated) AS 'NGAY', SUM(totalBill) AS 'TONGTIEN', COUNT(billId) AS 'TONGSOLUOT' FROM `bills` GROUP BY DATE(dateCreated);";
        $result = $db->pdo_query($sql);
        return $result;
    }
}
