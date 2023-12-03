<?php
class thongke{
    public function SOUSER(){
        $db = new connect();
        $sql = 'SELECT COUNT(userId) FROM `users` ';
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function SOPRODUCT(){
        $db = new connect();
        $sql = 'SELECT COUNT(productId) FROM `products` ';
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function SOCATEGORY(){
        $db = new connect();
        $sql = 'SELECT COUNT(categoryId) FROM `categorys` ';
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function SOBRAND(){
        $db = new connect();
        $sql = 'SELECT COUNT(brandId) FROM `brands` ';
        $result = $db->pdo_query_value($sql);
        return $result;
    }

    public function GIAMIN(){
        $db = new connect();
        $sql = "SELECT MIN(price) AS 'GIA', name FROM `products` GROUP BY name ORDER by price LIMIT 1 ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function GIAMAX(){
        $db = new connect();
        $sql = "SELECT MAX(price) AS 'GIA', name FROM `products` GROUP BY name ORDER by price DESC LIMIT 1 ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function GIATB(){
        $db = new connect();
        $sql = "SELECT AVG(price) AS 'GIA' FROM `products`";
        $result = $db->pdo_query_one($sql);
        return $result;
    }



    public function BANGTRON(){
        $db = new connect();
        $sql = "SELECT COUNT(PD.productId) AS 'SOSANPHAM',  CA.name FROM `categorys` CA INNER JOIN products PD ON PD.fk_categoryId = CA.categoryId
        GROUP BY CA.categoryId";
        $result = $db->pdo_query($sql);
        return $result;
    }
}