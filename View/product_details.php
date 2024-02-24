<div style="margin-bottom: 130px;"></div>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold"></h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <form action="index.php?action=cart&act=giohang_action" method="post">
                <div class="row">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->
                    <?php
                    if (isset($_GET['id'])) {
                        # code...
                        $id = $_GET['id'];
                        $hh = new products();
                        $sp = $hh->getHangHoaChiTiet($id);
                        $hangton = $sp['soluongton'];
                        $tenhh = $sp['tenhh'];
                        $mota = $sp['mota'];
                        $dongia = $sp['dongia'];
                        $hinh = $sp['hinh'];
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="hidden" name="mahh" value="<?php echo $id;?>">
                            <h5 class="product-title"><?php echo $tenhh; ?></h5>
                        </div>
                        <div class="col-md-4">
                            <div class="rating mt-2 text-md-end">
                                <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <hr>
                    <div class="preview col-md-6 align-items-center">
                        <div class="tab-content" style="width: 60%;">
                            <div class="tab-pane active" id=""><img src="./Content/imageProducts/<?php echo $hinh ?>" alt="" width="200px" height="350px"></div>
                        </div>
                    </div>
                    <div class="details col-md-6">
                        <h4 class="price"><?php echo number_format($dongia) ?><sup><u>đ</u></sup></h4>
                        <?php
                        if ($hangton > 0) {
                            echo '<span class=" font-weight-bold">Sản phẩm còn hàng</span>';
                        } else {
                            echo '<span class="text-danger font-weight-bold">Hết hàng</span>';
                        }
                        ?>

                        <hr>
                        <h5 class="colors">
                            </select><br>
                            </br>
                            Số Lượng:
                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                        </h5>
                        <div class="action">
                            <button class="add-to-cart btn btn-default btn-danger" name="them" type="submit" data-toggle="modal" data-target="#myModal">THÊM VÀO GIỎ HÀNG
                            </button>
                            <button class="add-to-cart btn btn-default btn-danger" name="mua" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY
                            </button>
                        </div>
                    </div>
                    <p class="product-description mt-5" style="text-align: left;">
                        <?php echo $mota ?>
                    </p>
                </div>
            </form>
        </div>
        <!-- </div> -->
    </article>

    <!-- binh luan -->

</section>

<p class="float-left"><b>BÌnh luận </b></p>
<hr>
</div>
<form action="" method="post">
    <div class="row">

        <input type="hidden" name="txtmahh" value="" />
        <img src="Content/imageProducts/people.png" width="50px" height="50px" ; />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
        <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

    </div>

</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
</div>
<div class="row">
    <br />
</div>

</div>
</section>