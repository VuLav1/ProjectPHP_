<?php
$act = "dangnhap";
if (isset($_GET['act'])) {
    # code...
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;
    case 'dangnhap_action':
        $user = '';
        $pass = '';
        if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
            # code...
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            $salfF = "23n4#";
            $salfL = "551kq!";
            $passnew = md5($salfF . $pass . $salfL);
            $kh = new user;
            $logkh = $kh->checkkhachhang($user, $passnew);
            if ($logkh) {
                # code...
                $_SESSION['makh'] = $logkh['makh'];
                $_SESSION['tenkh'] = $logkh['tenkh'];
                echo '<script> alert("Dang nhap thanh cong")</script>';
                echo '<meta http-equiv="refresh"content="0;url=./index.php?action=home"/>';
            } else {
                echo '<script> alert("Dang nhap khong thanh cong")</script>';
                echo '<meta http-equiv="refresh"content="0;url=./index.php?action=dangnhap"/>';
            }
        }
        break;
    case 'dangxuat':
        unset($_SESSION['tenkh']);
        unset($_SESSION['makh']);
        echo '<meta http-equiv="refresh"content="0;url=./index.php?action=home"/>';
        break;
}
