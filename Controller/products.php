<?php
    $act = "sanpham";
    if (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'sanpham':
            # code...
            include_once "./View/products.php";
            break;
        case 'sanphamkhuyenmai':
            # code...
            include_once "./View/products.php";
            break;
        case 'sanphamvga':
            include_once "./View/products.php";
            break;
        case 'sanphamchitiet':
            include_once "./View/product_details.php";
            break;
        case 'timkiem':
            include_once "./View/products.php";
            break;
}
