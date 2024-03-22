<?php
class profile
{
    function getInfoUser($makh)
    {
        // b1: Kết nối với dữ liệu
        $db = new connect();
        // b2: Viết câu truy vấn
        $select = "select a.tenkh, a.email, a.sdt, a.diachi from khachhang a WHERE a.makh=$makh";
        // b3: 
        $result = $db->getInstance($select);
        return $result;
    }
}
