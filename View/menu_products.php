<!-- end số lượt xem san phẩm -->
<!-- sản phẩm-->
<div style="margin-bottom: 130px;"></div>
<!--Section: Examples-->
<section id="examples" class="text-center">

  <!-- Heading -->
  <!--Grid row-->
  <div class="row">
    <!--Grid column-->

    <?php
    if (isset($_GET['id_child'])) {
      # code...
      $id_child = $_GET['id_child'];
      $menu_products = new menu_products();
      $sp = $menu_products->getMenu_products($id_child);
      while ($set = $sp->fetch()) :
    ?>
        <div class="col-lg-3 col-6 col-md-4 mb-3 text-center p-0">
          <a class="product" href="index.php?action=products&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
            <div style="height: 100%;" class="card rounded-0 shadow-none card-products">
              <div class="card-body p-0">
                <div class="view overlay z-depth-1-half">
                  <img src="./Content/imageProducts/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                  <div class="mask rgba-white-slight"></div>
                </div>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                  <span><?php echo $set['tenhh'] ?></span></br></a>

              </div>
              <div class="card-footer border-top-0 bg-white p-0">
                <h5 class="my-4">
                  <font color="red"><?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup></font><br>
                </h5>
              </div>
            </div>
          </a>
        </div>
    <?php endwhile;
    } ?>
    <?php
    if (isset($_GET['id_parent'])) {
      # code...
      $id_parent = $_GET['id_parent'];
      $menu_products2 = new menu_products();
      $pd2 = $menu_products2->getMenu_products2($id_parent);
      while ($set = $pd2->fetch()) :
    ?>
        <div class="col-lg-3 col-6 col-md-4 mb-3 text-center p-0">
          <a class="product" href="index.php?action=products&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
            <div style="height: 100%;" class="card rounded-0 shadow-none card-products">
              <div class="card-body p-0">
                <div class="view overlay z-depth-1-half">
                  <img src="./Content/imageProducts/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                  <div class="mask rgba-white-slight"></div>
                </div>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                  <span><?php echo $set['tenhh'] ?></span></br></a>

              </div>
              <div class="card-footer border-top-0 bg-white p-0">
                <h5 class="my-4">
                  <font color="red"><?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup></font><br>
                </h5>
              </div>
            </div>
          </a>
        </div>
    <?php endwhile;
    } ?>
  </div>

  <!--Grid row-->

</section>


<!-- end sản phẩm mới nhất -->