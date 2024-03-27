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
        <div class="col-md-12">
            <div class=" feature_user">
                <?php
                if (isset($_SESSION['makh'])) {
                    $makh = $_SESSION['makh'];
                    $pf = new profile();
                    $kh = $pf->getInfoUser($makh);
                    $tenkh = $kh['tenkh'];
                    $email = $kh['email'];
                    $sdt = $kh['sdt'];
                ?>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="row container d-flex justify-content-center">
                                <div class="col-xl-12 col-md-12">
                                    <div class="card user-card-full">
                                        <div class="row m-l-0 m-r-0">
                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                <div class="card-block text-center text-white">
                                                    <div class="m-b-25">
                                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                    </div>
                                                    <h6 class="f-w-600"><?php echo $tenkh ?></h6>
                                                    <button type="button" class="list-group-item list-group-item-action"><a href="index.php?action=login&act=dangxuat">Đăng xuất</a></button>
                                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-block">
                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Email</p>
                                                            <h6 class="text-muted f-w-400"><?php echo $email ?></h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Phone</p>
                                                            <h6 class="text-muted f-w-400"><?php echo $sdt ?></h6>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php
                }
                ?>
            </div>

        </div>

        <div class="col-md-8">

        </div>
    </div>
</div>