<?php
class menu_products
{
    function getMenu_products($id_child)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.maloai,b.mahh,b.hinh,b.tenhh,b.mota,b.idloai,c.dongia FROM loai a INNER JOIN hanghoa b ON a.maloai = b.idloai INNER JOIN cthanghoa c ON b.mahh = c.idhanghoa WHERE a.maloai = $id_child;";
        $result = $db->getList($select);
        return $result;
    }
    function getMenu_products2($id_parent)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.maloai,a.idmenu,b.mahh,b.hinh,b.tenhh,b.mota,b.idloai,c.dongia FROM loai a LEFT JOIN hanghoa b ON a.maloai = b.idloai INNER JOIN cthanghoa c ON b.mahh = c.idhanghoa WHERE a.idmenu=$id_parent;";
        $result = $db->getList($select);
        return $result;
    }
}
