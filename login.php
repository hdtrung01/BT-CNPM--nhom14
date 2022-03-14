<?php include 'head.php' ?>

<div class="row container shadow" style="margin: auto; margin-top:3%">
<!-- Cột đăng nhập -->
  <div class="col-4 text-center" style="margin-top: 14%">
    <h1 class="fw-bold">Đăng Nhập</h1><br>
    <form action = "login_process.php" method = "POST">
      <input type="text" class="form-control" name="username" placeholder="Tên người dùng"><br>
      <input type="password" class="form-control" name="password" placeholder="Mật khẩu"><br>
      <button type="submit" class="btn btn-primary">Đăng nhập</button><br><br>
      <a class = "btn btn-success" href="register.php">Tạo tài khoản</a>
    </form>     
  </div>
<!-- Cột ảnh -->
  <div class="col-8">
    <img width="100%" src="img/logo.jpg">
  </div>
</div>

<?php include 'foot.php' ?>