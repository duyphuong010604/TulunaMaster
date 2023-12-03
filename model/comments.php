<?php
class comment
{
    //khai bao thuoc tinh
    var $commentId = null;
    var $productId = null;
    var $userId = null;
    var $content = null;
    var $status = null;
    var $reply = null;
    


    public function get_list()
    {
        $db = new connect();
        $sql = "SELECT * FROM comments ";
        $result = $db->pdo_query($sql);
        return $result;
    }



    public function get_list_client($productId)
    {
        $db = new connect();
        $sql = "SELECT  * FROM comments CM 
        INNER JOIN commentdetails CMD ON CMD.DcommentId = CM.commentId
        INNER JOIN users US ON US.userId = CM.fk_userId
        INNER JOIN products PD ON PD.productId = CMD.DproductId WHERE CM.status = 1 and PD.productId = ". $productId;
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function get_list_admin($commentId)
    {
        $db = new connect();
        $sql = "SELECT  *,CMD.replyContent AS 'traloi' FROM comments CM 
        INNER JOIN commentdetails CMD ON CMD.DcommentId = CM.commentId
        INNER JOIN users US ON US.userId = CM.fk_userId
        INNER JOIN products PD ON PD.productId = CMD.DproductId WHERE CM.commentId = ". $commentId;
        $result = $db->pdo_query($sql);
        return $result;
    }

    public function get_list_chua_trl()
    {
        $db = new connect();
        $sql = "SELECT * FROM `commentdetails` CMD INNER JOIN comments CM ON CM.commentId = CMD.DcommentId WHERE CMD.replyContent IS NULL ";
        $result = $db->pdo_query($sql);
        return $result;
    }
    public function getById_commentDetail($commentId)
    {
        $db = new connect();
        $sql = "SELECT * FROM commentDetails WHERE DcommentId = $commentId ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function getById_editAdmin($commentId)
    {
        $db = new connect();
        $sql = "SELECT * FROM `commentdetails` CMD
        INNER JOIN comments CM ON CM.commentId = CMD.DcommentId WHERE DcommentId = $commentId ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function getById($commentId)
    {
        $db = new connect();
        $sql = "SELECT * FROM comments WHERE commentId = $commentId ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    


    public function getById_forEdit($commentId,$userId)
    {
        $db = new connect();
        $sql = "SELECT commentId FROM comments WHERE commentId = $commentId and userId = $userId ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }
    public function getById_commentId_first()
    {
        $db = new connect();
        $sql = "SELECT commentId FROM `comments` ORDER BY commentId DESC ";
        $result = $db->pdo_query_one($sql);
        return $result;
    }

    public function add_comment($content,$userId)
    {
        $db = new connect();
        $sql = "INSERT INTO comments (content,fk_userId) VALUES ('$content','$userId') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function add_comment_Detail_client($commentId,$productId)
    {
        $db = new connect();
        $sql = "INSERT INTO commentdetails (DcommentId ,DproductId) VALUES ('$commentId','$productId') ";
        $result = $db->pdo_execute($sql);
        return $result;
    }



    public function update_comment($commentId, $content)
    {
        $db = new connect();
        $sql = "UPDATE comments SET content='$content' where commentId = $commentId";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function update_commentDetail($commentId, $replyContent)
    {
        $db = new connect();
        $sql = "UPDATE commentDetails SET replyContent='$replyContent' where DcommentId = $commentId";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function update_commentStatus($commentId, $status)
    {
        $db = new connect();
        $sql = "UPDATE comments SET status=$status where commentId = $commentId";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    public function delete($commentId)
    {
        $db = new connect();
        $sql = "DELETE FROM comments  WHERE commentId = $commentId ";
        $result = $db->pdo_execute($sql);
        return $result;
    }

    

    
}
