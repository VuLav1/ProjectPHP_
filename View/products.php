  <!-- quảng cáo -->
  <?php
  // include "advertising.php";
  ?>
  <!-- end quảng cáo -->
  <?php
  $hh = new products();
  $result = $hh->getHangHoaCPUAll();
  ?>

  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
  <?php
  $ac = 1;
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'products') {
      if (isset($_GET['act'])) {
        if ($_GET['act'] == 'sanphamkhuyenmai') {
          $ac = 2;
        } elseif ($_GET['act'] == 'products') {
          $ac = 1;
        } elseif ($_GET['act'] == 'sanphamvga') {
          $ac = 3;
        } elseif ($_GET['act'] == 'timkiem') {
          # code...
          $ac = 4;
        }
      }
    }
  }
  ?>
  <section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
      <div class="col-lg-8 text-right">
        <?php
        if ($ac == 1) {
          # code...
          echo '<h4 class="mb-5 font-weight-bold">TẤT CẢ SẢN PHẨM</h4>';
        }
        if ($ac == 2) {
          # code...
          echo '<h4 class="mb-5 font-weight-bold">TẤT CẢ SẢN PHẨM SALE</h4>';
        }
        if ($ac == 3) {
          echo '<h4 class="mb-5 font-weight-bold">SAN PHAM VGA</h4>';
        }
        if ($ac == 4) {
          # code...
          echo '<h4 class="mb-5 font-weight-bold">SẢN PHẨM TÌM KIẾM</h4>';
        }
        ?>
      </div>

    </div>
    <!--Grid row-->
    <div class="row">
      <?php
      $hh = new products();
      if ($ac == 1) {
        # code...
        $result = $hh->getHangHoaAllPage();
      }
      if ($ac == 2) {
        # code...
        $result = $hh->getHangHoaSaleAll();
      }
      if ($ac == 3) {
        $result = $hh->getHangHoaVGAAll();
      }
      if ($ac == 4) {
        if (isset($_POST['txtsearch'])) {
          # code...
          $tiemkiem = $_POST['txtsearch'];
          $result = $hh->search_products($tiemkiem);
        }
      }
      while ($set = $result->fetch()) :
      ?>
        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-3 text-left">

          <div class="view overlay z-depth-1-half">
            <img src="Content\imageProducts\<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
            <div class="mask rgba-white-slight"></div>
          </div>
          <?php
          if ($ac == 1) {
            # code...
            echo '<h5 class="my-4 font-weight-bold" style="color: red;">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></br></h5>';
          }
          if ($ac == 2) {
            # code...
            echo '<h5 class="my4 font-weight-bold">
              <font color="red">' . $set['giamgia'] . '<sup><u>đ</u></sup></font></br>
              <strike>' . number_format($set['dongia']) . '</strike><sup><u>đ</u></sup>
              </h5>';
          }
          ?>

          </h5>
          <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
            <span><?php echo $set['tenhh']; ?></span></br></a>
          <!-- <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup></h5> -->
          <button class="btn btn-danger" id="may4" value="lap 4">New</button>
          <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5>

        </div>
      <?php
      endwhile;
      ?>
    </div>
  </section>