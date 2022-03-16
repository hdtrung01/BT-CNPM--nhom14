<?php include 'head.php' ?>
<?php include 'head.php' ?>
<!-- Trang chủ -->
<!-- navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="index.php"><i class="fas fa-book-open fa-3x"></i></a>
    <form class="d-flex">
        <a class="nav-link" href="donhang.php"> <i class="fas fa-clipboard-list" style="color:white"></i></i>Đơn hàng</a>
        <a class="nav-link" href="giohang.php"> <i class="fas fa-cart-plus" style="color:white"></i>Giỏ hàng</a>
        <a class="nav-link" href="login.php">Đăng nhập</a>
    </form>
    </div>
  </div>
</nav>

<!-- CSDL -->
<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:./login.php");
  }
  $username = $_SESSION["username"];
  include 'head.php';
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  };
  $sql="SELECT * FROM giohang INNER JOIN sanpham on sanpham.MaSP = giohang.MaSP WHERE username = '$username'";
  $result=mysqli_query($conn, $sql);
?>
<!-- poster -->
<style>
  .pt{
    height: 400px;
    width: 90%;
    background: url(img/post1.png);
    margin: 0 auto;
    margin-top:20px;
    animation: slide 25s infinite;
}
@keyframes slide {
    25%{
       background: url(img/post1.png);
    }
    50%{
        background: url(img/post2.png);
    }
    75%{
        background: url(img/poster.png);
    }
   100%{
       background: url(img/post3.png);
   }
}
.sanpham{
  margin: 50px;
  color:red;
}
.card{
  width:20%;
  margin:30px;
  float:left;
}
.timkiem{
  margin-left:20%;
  margin-right:20%;
  margin-top:70px;
}
.clearfix {
  content: "";
  clear: both;
  display: table;
}
</style>
<!-- Slide -->


<!-- Danh sach sach' -->
<h3 class="sanpham">Sản Phẩm:</h3>
  <?php
    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Sản Phẩm</th>
        <th scope="col"></th>
        <th scope="col">Giá</th>
        <th scope="col">Số Lượng</th>
        <th scope="col">Thành Tiền</th>
      </tr>
    </thead>
    <tbody>';
    if (mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)){
    echo '<tr>
        <th scope="row"></th>
        <td>'.$row['TenSP'].'</td>
        <td><img src="img/'.$row['anh'].'" style="height:50px"></td>
        <td>'.$row['Gia'].'</td>
        <td>'.$row['SoLuong'].'</td>
        <td>'.$row['Gia']*$row['SoLuong'].'</td>
      </tr>';
      }
    }
    echo '    </tbody>
    </table>';
    echo '<a href="thanhtoan.php" style="float: right; margin-right: 20%;" class="btn btn-success">Thanh Toán Ngay</a>';
    ?>
</div>

<div class="clearfix"></div>


<!-- footer -->

<div class="border-top shadow text-center" style="height:300px; margin-top:100px; background-color:lightgrey">
    <h2 style="margin:50px">Nhóm 14-61TH1 Hân hạnh đồng hành!</h2>
    <h5 style="margin:50px">BTL Công nghệ phần mềm</h5>
</div>
<script>
$('#add').click(function() {$.ajax({
        url: "giohang.php",
        type: 'post',
  <?php
	echo 
"data:'".$id."'";
	?>
,success: function(){
       }
   });
});
</script>
<?php include 'foot.php' ?>

