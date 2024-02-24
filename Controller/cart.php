<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
# code...
$act = "giohang";
if (isset($_GET['act'])) {
    # code...
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        # code...
        include_once "./View/Cart.php";
        break;
    case 'giohang_action':
        $mahh = 0;
        $soluong = 0;
        if (isset($_POST['mahh'])) {
            # code...
            $mahh = $_POST['mahh'];
            echo $mahh;
            $soluong = $_POST['soluong'];
            $gh = new cart();
            $gh->addHangHoa($mahh, $soluong);
        }
        if (isset($_POST['them'])) {
            # code...
            echo "<meta http-equiv='refresh'content='0;url=./index.php?action=products&act=sanphamchitiet&id=$mahh'/>";
        } else if (isset($_POST['mua'])) {
            echo   "<meta http-equiv='refresh'content='0;url=./index.php?action=hang'/>";
        }
        break;
    case 'delete_cart':
        if (isset($_GET['id'])) {
            $vt=$_GET['id'];
            unset($_SESSION['cart'][$vt]);
            echo  '<meta http-equiv="refresh"content="0;url=./index.php?action=cart"/>';
        }
        break;
    case 'update_cart':
        if (isset($_POST['newqty'])) {
            # code...
            $newqty=$_POST['newqty'];
            foreach ($newqty as $key => $value) {
                # code...
                if ($_SESSION['cart'][$key]['soluong']!=$value) {
                    # code...
                    $gh=new cart();
                    $gh->updateHH($key,$value);
                }
            }
        }
        echo '<meta http-equiv="refresh"content="0;url=./index.php?action=cart"/>';
        break;
}
