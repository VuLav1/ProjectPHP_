<?php
if (isset($_SESSION['makh'])) {
    # code...
    $makh = $_SESSION['makh'];
    $act = "profile";
}
if (isset($_GET['act'])) {
    # code...
    $act = $_GET['act'];
}
switch ($act) {
    case 'profile':
        # code...
        include_once "./View/profile.php";
        break;
}
