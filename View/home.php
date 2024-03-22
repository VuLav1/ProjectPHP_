
  <!--Section: Examples-->
  <div style="margin-bottom: 130px;" class=""></div>
  <?php
    include "advertising.php";
    ?>
  <section id="examples" class="">

      <!-- Heading -->
      <div class="row p-0 bg-white mb-2">
          <div class="col-md-6" id="box">
              <span>CPU - BỘ VI XỬ LÝ</span>
          </div>
          <div class="col-md-6 text-end p-2">
              <a href="index.php?action=products">
                  <span style="color: gray;">Xem tất cả</span></a>
          </div>
      </div>
      </div>
      <!--Grid row-->
      <div class="row">

          <?php
            $hh = new products();
            $result = $hh->getHangHoaCPUNew();
            while ($set = $result->fetch()) :
            ?>
              <!--Grid column-->
              <div data-aos="fade-up" data-aos-deplay="500" data-oas-duration="1000" class="col-lg-3 col-6 col-md-4 mb-3 text-center p-0">
                  <a class="product" href="index.php?action=products&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                      <div style="height: 100%;" class="card rounded-0 shadow-none card-products">
                          <div class="card-body p-0">
                              <div class="view overlay z-depth-1-half">
                                  <img src="./Content/imageProducts/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                                  <div class="mask rgba-white-slight"></div>
                              </div>
                              <a href="index.php?action=products&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
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
          <?php
            endwhile;
            ?>
      </div>
      <!--Grid row-->
      <!-- end sản phẩm khuyến mãi -->
      <section id="examples" class="">
          <!-- Heading -->
          <div class="row p-0 bg-white mb-2">
              <div class="col-md-6" id="box">
                  <span>CPU - BỘ VI XỬ LÝ</span>
              </div>
              <div class="col-md-6 text-end p-2">
                  <a href="index.php?action=products&act=sanphamvga">
                      <span style="color: gray;">Xem tất cả</span></a>
              </div>
          </div>
          <!--Grid row-->
          <div class="row">

              <?php
                $km = new products();
                $result = $km->getHangHoaVGANew();
                while ($set = $result->fetch()) :
                ?>
                  <!--Grid column-->
                  <div data-aos="fade-up" data-aos-deplay="500" data-oas-duration="1000" class="col-lg-3 col-6 col-md-4 mb-3 text-center p-0">
                      <a class="product" href="index.php?action=products&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                          <div style="height: 100%;" class="card rounded-0 shadow-none card-products">
                              <div class="card-body p-0">
                                  <div class="view overlay z-depth-1-half">
                                      <img src="./Content/imageProducts/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                                      <div class="mask rgba-white-slight"></div>
                                  </div>
                                  <a href="index.php?action=products&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
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
              <?php
                endwhile;
                ?>
          </div>

          <!--Grid row-->

      </section>
      <section id="examples" class="">

          <!-- Heading -->
          <div class="row p-0 bg-white mb-2">
              <div class="col-md-6" id="box">
                  <span>CPU - BỘ VI XỬ LÝ</span>
              </div>
              <div class="col-md-6 text-end p-2">
                  <a href="index.php?action=products&act=sanphamkhuyenmai">
                      <span style="color: gray;">Xem tất cả</span></a>
              </div>
          </div>
          <!--Grid row-->
          <div class="row">

              <?php
                $km = new products();
                $result = $km->getHangHoaSale();
                while ($set = $result->fetch()) :
                ?>
                  <!--Grid column-->
                  <div data-aos="fade-up" data-aos-deplay="500" data-oas-duration="1000" class="col-lg-3 col-6 col-md-4 mb-3 text-center p-0">
                      <a class="product" href="index.php?action=products&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                          <div style="height: 100%;" class="card rounded-0 shadow-none card-products">
                              <div class="card-body p-0">
                                  <div class="view overlay z-depth-1-half">
                                      <img src="./Content/imageProducts/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                                      <div class="mask rgba-white-slight"></div>
                                  </div>
                                  <a href="index.php?action=products&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                                      <span><?php echo $set['tenhh'] ?></span></br></a>

                              </div>
                              <div class="card-footer border-top-0 bg-white p-0">
                                  <h5 class="my-4">
                                      <font color="red"><?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup></font><br>
                                      <!-- <span>Khuyến mãi</span> -->
                                      <i class=""><del><?php echo number_format($set['giamgia']); ?></i></del><sup>đ</sup>
                                  </h5>
                              </div>
                          </div>
                      </a>
                  </div>
              <?php
                endwhile;
                ?>
          </div>

          <!--Grid row-->