<?php
    class menu{
        function getMenuCon(){
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT DISTINCT a.tenmenucha, a.idmenucha, b.idmenu, b.tenloai, b.maloai FROM menu a, loai b where a.idmenucha=b.idmenu";
            // b3: 
            $result=$db->getList($select);
            return $result;
        }
        function getMenu(){
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT DISTINCT idmenucha, tenmenucha FROM menu JOIN loai ON menu.idmenucha = loai.idmenu;
            ";
            // b3: 
            $result=$db->getList($select);
            return $result;
        }
    }
?>