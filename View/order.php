<div style="margin-bottom: 150px;"></div>
<div class="table-responsive">
  <?php
  if (!isset($_SESSION['makh'])) :
    echo '<script> alert("ban phai dang nhap")</script>';
    echo '<meta http-equiv="refresh"content="0;url=./index.php?action=login"/>';
  ?>
  <?php
  else :
  ?>
    <form action="">
      <table class="table table-bordered" border="0">
        <?php
        if (isset($_SESSION['mahd'])) {
          $mahd = $_SESSION['mahd'];
          $hd = new invoice();
          $kh = $hd->selectThongTinKH($mahd);
          $tenkh = $kh['tenkh'];
          $ngaydat = $kh['ngaydat'];
          $dc = $kh['diachi'];
          $sdt = $kh['sdt'];
        ?>

        <tr>
          <td colspan="4">
            <h2 class="text-danger">HÓA ĐƠN</h2>
          </td>
        </tr>
        <tr>
          <td colspan="2">Số Hóa đơn: <?php echo $mahd?></td>
          <td colspan="2"> Ngày lập: <?php echo $ngaydat?></td>
        </tr>
        <tr>
          <td colspan="2">Họ và tên: <?php echo $tenkh?></td>
          <td colspan="2"></td>
        </tr>
        <tr>
          <td colspan="2">Địa chỉ: <?php echo $dc?></td>
          <td colspan="2"></td>
        </tr>
        <tr>
          <td colspan="2">Số điện thoại: <?php echo $sdt?></td>
          <td colspan="2"></td>
        </tr>

      </table>
      <!-- Thông tin sản phầm -->
      <table class="table table-bordered">
        <thead>

          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Giá</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $j=0;
            $sp=$hd->selectThongTinHoaDon($sohd);
            while($set=$sp->fetch()):
              $j++;
          ?>

          <tr>
            <td><?php echo $j?></td>
            <td><?php echo $set['tenhh']?></td>
            <td>Đơn Giá: <?php echo $set['dongia']?> - Số Lượng: <br />
            </td>
          </tr>
              <?php endwhile?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b> <sup><u>đ</u></sup></b>
            </td>
          <?php
          }
          ?>
          </tr>
        </tbody>
      </table>
    </form>

  <?php
  endif;
  ?>
</div>
</div>