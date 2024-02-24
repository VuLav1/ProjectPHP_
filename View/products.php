  <!-- quảng cáo -->
  <?php
  // include "advertising.php";
  ?>
  <!-- end quảng cáo -->
  <?php
  $hh = new products();
  $result = $hh->getHangHoaCPUAll();
  $count = $result->rowCount();
  $limit = 8;
  $trang = new page();
  $page = $trang->findPage($count, $limit);
  $start = $trang->findStart($limit);
  $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
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
        }
        elseif ($_GET['act'] == 'products') {
          $ac = 1;
        }
        elseif ($_GET['act'] == 'sanphamvga') {
          $ac = 3;
        }
        elseif ($_GET['act'] == 'timkiem') {
          # code...
          $ac = 4;
        }
      }
    }
  }
  ?>
  <div class="col-lg-12">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Content/imageProducts/showinhinhanh1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="Content/imageProducts/showinhinhanh2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="Content/imageProducts/showinhinhanh3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!--Section: Examples-->
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
        $result = $hh->getHangHoaAllPage($start, $limit);
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
          $tiemkiem=$_POST['txtsearch'];
          $result=$hh->search_products($tiemkiem);
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

    <!--Grid row-->

  </section>


  <!-- end sản phẩm mới nhất -->


  <div class="col-md-6 div col-md-offset-3">
    <ul class="pagination">
      <?php
      for ($i = 1; $i <= $page; $i++) :
      ?>
        <li><a href="index.php?action=sanpham&page=<?php echo $i; ?>"></a></li>
        <?php
        echo $i;
        ?>
      <?php
      endfor;
      ?>
    </ul>
  </div>
  <div class="col-md-6 div col-md-offset-3">
    <ul class="pagination">
      <li><a href="">1</a></li>
    </ul>
  </div>
  <div class="col-md-6 div col-md-offset-3">
    <nav aria-label="...">
      <ul class="pagination">
        <?php
        for ($i = 1; $i <= $page; $i++) :
        ?>
          <li class="page-item"><a class="page-link" href="index.php?action=products&page=<?php echo $i; ?>"><?php echo $i ?></a></li>

        <?php
        endfor;
        ?>
      </ul>
    </nav>
  </div>