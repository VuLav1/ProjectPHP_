<?php
    $act = "menu_product";
    if (isset($_GET['act'])) {
        # code...
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'menu_products':
            # code...
            include_once "./View/menu_products.php";
            break;
}
