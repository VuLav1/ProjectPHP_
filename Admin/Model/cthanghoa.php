<?php
    class cthanghoa{
        function insertCTHangHoa($mahh,$mamau,$masize,$dongia,$slt)
        {
            $db=new connect();
            $query="insert into cthanghoa(idhanghoa,dongia,soluongton) values ($mahh,$mamau,$masize,$dongia,$slt)";
            $result=$db->exec($query);
            return $result;
        }
    }
?>