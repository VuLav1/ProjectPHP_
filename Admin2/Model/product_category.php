<?php
class product_category{
    function getCategory()
    {
        $db=new connect();
        $select="select * from loai";
        $result=$db->getList($select);
        return $result;
    }
}
?>