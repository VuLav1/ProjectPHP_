<?php
if (isset($_SESSION['makh'])) {
    # code...
    $makh = $_SESSION['makh'];
    $hd = new invoice();
    $sohd = $hd->insertHoaDon($makh);
    $_SESSION['mahd'] = $sohd;
    $total = 0;
    if (isset($_SESSION['cart'])) {
        # code...

        foreach ($_SESSION['cart'] as $key => $item) {
            # code...
            $hd->insertCTHoaDon($sohd, $item['mahh'], $item['soluong'], $item['thanhtien']);
            $total += $item['thanhtien'];
        }
    }
    $hd->updateTotal($sohd, $makh, $total);
    $hd->updateSoLuongTon($item['soluong'], $item['mahh']);
}
unset($_SESSION['cart']);
include_once "./View/order.php";
