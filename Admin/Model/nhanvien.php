<?php
    class nhanvien{
        function getAdmin($user,$pass)
        {
            $db=new connect();
            $select="select username,pass from nhanvien where username='$user' and pass='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }
    }
?>