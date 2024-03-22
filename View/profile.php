<div style="margin-bottom: 150px;"></div>
<?php
$pf = new profile();
$result = $pf->getInfoUser($makh);
// $result = $pf -> getInfoUser();
$ac = 1;
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'profile') {
        if (isset($_GET['act'])) {
            if ($_GET['act'] == 'infoUser') {
                $ac = 2;
            } elseif ($_GET['act'] == 'profile') {
                $ac = 1;
            } elseif ($_GET['act'] == 'addressUser') {
                $ac = 3;
            } elseif ($_GET['act'] == 'oderHistory') {
                # code...
                $ac = 4;
            }
        }
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class=" feature_user">
                <i class="bi bi-person-circle"></i>
                <?php
                if(isset($_SESSION['makh'])){
                    $makh = $_SESSION['makh'];
                    $pf = new profile();
                    $kh = $pf->getInfoUser($makh);
                    $tenkh = $kh['tenkh'];
                    ?>
                    <span><?php echo $makh?></span>
                    <span><?php echo $tenkh?></span>
                <?php
                }
                ?>
            </div>
            <div class="link_account">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>