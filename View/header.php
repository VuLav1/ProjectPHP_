<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="./phandau.png " alt=""></a>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div style="position: relative;" class="menu offcanvas-body">
                <ul id="me" class="navbar-nav justify-content-center flex-grow-1 pe-3 me-1">
                    <?php
                    $menuMain = new menu();
                    $resultMain = $menuMain->getMenu();
                    while ($mainSet = $resultMain->fetch()) :
                    ?>
                        <li class="nav-item mx-lg-2">
                            <a id="navb" class="nav-link active" aria-current="page" href="index.php?action=menu_product&act=menu_products&id_parent=<?php echo $mainSet['idmenucha'] ?>"><?php echo $mainSet['tenmenucha'] ?></a>
                            <ul>
                                <?php
                                $menuSub = new menu();
                                $resultSub = $menuSub->getMenuCon($mainSet['idmenucha']); // Assuming you need to pass the parent menu id
                                while ($subSet = $resultSub->fetch()) :
                                    if ($mainSet['idmenucha']==$subSet['idmenu']) {
                                        # code...
                                    
                                ?>
                                    <a href="index.php?action=menu_product&act=menu_products&id_child=<?php echo $subSet['maloai'] ?>"><li><?php echo $subSet['tenloai'] ?></li></a>
                                <?php
                                    }
                                endwhile;
                                ?>
                            </ul>
                        </li>
                    <?php
                    endwhile;
                    ?>
                </ul>
            </div>

        </div>
        <form action="index.php?action=products&act=timkiem" method="post" class="d-flex mt-3 me-2" role="search">
            <input style="border: 2px solid black;" class="form-control me-2 rounded-5" type="text" name="txtsearch" placeholder="Search" aria-label="Search">
        </form>


        <div class="user1">


            <?php
            if (isset($_SESSION['makh'])) {
                # code...
                // echo '<a href="" class="text-md-center"><h4 style= "color: black"><i class="bi bi-person-check-fill"></i>' . $_SESSION['tenkh'] . '</h4></a>';
                // echo '<a href="index.php?action=dangnhap&act=dangxuat" class="text-md-end"><h5>Đăng xuất</h5></a>';
                echo '<a href=""><button class="border rounded-5 btn btn-primary"><i class="bi bi-person-circle"></i></button>' . $_SESSION['tenkh'] . '</a>';
                echo '
                    <div id="dropdown1">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action">Xem thông tin</button>
                            <button type="button" class="list-group-item list-group-item-action"><a href="index.php?action=login&act=dangxuat">Đăng xuất</a></button>
                        </div>
                    </div>';
            } else {
                echo '<a href="index.php?action=login"><button class="btn btn-block bg-danger text-light rounded-4" name="submit" type="submit"> Đăng Nhập</button></a>';
            }
            ?>

        </div>

        <a href="index.php?action=cart"><button type="button" class="btn btn-light"><i class="bi bi-cart2"></i></button></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>