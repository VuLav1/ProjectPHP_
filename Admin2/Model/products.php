<?php
class products{
    function getProducts()
    {
        $db=new connect();
        $select="select * from hanghoa";
        $result=$db->getList($select);
        return $result;
    }
    function insertProducts($tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="insert into hanghoa(mahh,tenhh,idloai,dacbiet,soluotxem,ngaylap,mota) values (Null,'$tenhh',$maloai,$dacbiet,$slx,'$ngaylap','$mota')";
        $result=$db->exec($query);
        return $result;
    }
    // phương thức lấy thông tin 1 món hàng
    function getProductID($id)
    {
        $db=new connect();
        $select="select * from hanghoa where mahh=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    // phương thức update
    function updateProducts($mahh,$tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="update hanghoa 
        set tenhh='$tenhh',maloai=$maloai,dacbiet=$dacbiet,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";
        $result=$db->exec($query);
        return $result;
    }

}
?>