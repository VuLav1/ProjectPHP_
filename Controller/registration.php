<?php
$act = "dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        include_once "./View/registration.php";
        break;
    case 'dangky_action':
        $tenkh = '';
        $diachi = '';
        $sodt = '';
        $email='';
        $user = '';
        $pass = '';
        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txttenkh'];
            $diachi = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $email=$_POST['txtemail'];
            $user = $_POST['txtuser'];
            $pass = $_POST['txtpass'];
            $salfF = "23n4#";
            $salfL = "551kq!";
            $passnew = md5($salfF.$pass.$salfL);
            $kh=new user();
            $check = $kh->checkUser($user,$email)->rowCount();
            if ($check>=1) {
                # code...
                echo '<script> alert("Username hoac email da ton tai")</script>';
                // include_once "./View/registration.php";
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangky"/>';
            }
            else{
                $inskh=$kh->insertKhachHang($tenkh,$user,$passnew,$email,$diachi,$sodt);
                if($inskh!==false){
                    echo '<script> alert("Dang ky thanhf cong")</script>';
                    include_once "./View/home.php";
                }
                else{
                    echo '<script> alert("dang ky khong thanh cong")</script>';
                    include_once "./View/registration.php";
                }
            }
        }
        break;
}
