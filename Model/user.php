<?php
    class user{
        function checkUser($user,$email){
            $db = new connect();
            $select = "select a.username, a.email from khachhang a where a.username='$user' or a.email='$email';";
            $result = $db->getList($select);
            return $result;
        }
        function insertKhachHang($tenkh,$user,$pass,$email,$diachi,$sodt){
            $db = new connect();
            $query="INSERT INTO khachhang (makh, tenkh, username, pass, email, diachi, sdt) VALUES (NULL, '$tenkh', '$user', '$pass', '$email', '$diachi', '$sodt')";
            $result = $db->exec($query);
            return $result;
        }
        function checkLogin($user,$pass){
            $db = new connect();
            $select = "select a.username, a.makh, a.tenkh from khachhang a where a.username='$user' and a.pass='$pass';";
            $result = $db->getInstance($select);
            return $result;
        }
        function checkkhachhang($user,$pass){
            $db = new connect();
            $select = "select a.username, a.makh, a.tenkh from khachhang a where a.username='$user' and a.pass='$pass';";
            $result = $db->getInstance($select);
            return $result;
        }
        function checkMail($email){
            $db = new connect();
            $select = "select * from khachhang a where a.email='$email';";
            $result = $db->getList($select);
            return $result;
        }
        function updateEmail($email,$passnew){
            $db = new connect();
            $query = "update khachhang set pass='$passnew' where email='$email';";
            $result = $db->exec($query);
            return $result;
        }
    }
?>