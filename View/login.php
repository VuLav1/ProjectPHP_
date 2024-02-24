<div style="margin-bottom: 120px;"></div>
<div class="login">
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form action="index.php?action=registration&act=dangky_action" method="post" class="form" role="form">
        <h3>Đăng ký</h3>
        <div class="col-xs-12 col-md-12"><input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text"> </div>
        <div class="col-xs-12 col-md-12"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text"> </div>
        <div class="col-xs-12 col-md-12"><input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> </div>
        <div class="col-xs-12 col-md-12"><input class="form-control" name="txtuser" placeholder="Tên đăng nhập" required="" type="text">
        </div>
        <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
        <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"> Đăng ký</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <form action="index.php?action=login&act=dangnhap_action" class="login-form" method="post">
        <h3>Đăng nhập</h3>
        <div class="form-group">
          <input type="text" class="form-control" name="txtusername" placeholder="">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="txtpassword" placeholder="">
        </div>
        <div class="form-check p-0">
          <div class="copy-text float-right"><a href="index.php?action=forget">Quên mật khẩu</a></div>
          <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit"> Đăng Nhập</button>
        </div>
      </form>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Đăng nhập!</h1>
          <p>Đăng nhập để có thể dễ dàng mua sắm theo ý mình muốn</p>
          <button class="hidden" id="login">Đăng nhập</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Bạn chưa có tài khoản ?</p>
          <button class="hidden" id="register">Đăng ký</button>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</div>