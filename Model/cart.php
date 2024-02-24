<?php
class cart
{
    function addHangHoa($mahh, $soluong)
    {
        $sanpham = new products();
        $sp = $sanpham->getHangHoaChiTiet($mahh);
        $tenhh = $sp['tenhh'];
        $dongia = $sp['dongia'];
        $hinh = $sp['hinh'];
        $total = $soluong * $dongia;
        $flag = false;
        foreach ($_SESSION['cart'] as $key => $item) {
            # code...
            if ($item['mahh'] == $mahh) {
                # code...
                $flag = true;
                $soluong += $item['soluong'];
                $this->updateHH($key, $soluong);
            }
        }
        if ($flag == false) {
            # code...

            $item = array(
                'mahh' => $mahh,
                'tenhh' => $tenhh,
                'hinh' => $hinh,
                'dongia' => $dongia,
                'thanhtien' => $total,
                'soluong' => $soluong
            );
            $_SESSION['cart'][] = $item;
        }
    }
    function updateHH($index, $soluong)
    {
        if ($soluong <= 0) {
            # code...
            unset($_SESSION['cart'][$index]);
        } else {
            $_SESSION['cart'][$index]['soluong'] = $soluong;
            $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
            $_SESSION['cart'][$index]['thanhtien'] = $tiennew;
        }
    }
    function getSubTotal()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            # code...
            $subtotal += $item['thanhtien'];
        }
        $subtotal = number_format($subtotal, 2);
        return $subtotal;
    }
}
