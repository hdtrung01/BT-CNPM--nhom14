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
  $id = $_GET['id'];
  include 'head.php';
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  }

  $sql="SELECT * FROM sanpham where MaSP = '$id'";
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
    if (mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)){
	echo '<div class="container">
	  <div class="row">
	  <div class="col">;
	  <img src="img/'.$row['anh'].'" style="height:500px">;
	  </div>
 	  <div class="col">
	  <h5 class="card-title">'.$row['TenSP'].'</h5>
	  <div style="color:#ee4d2d;font-size:50px;">'.$row['Gia'].'</div>
	  </br>
	  <a href="giohang.php?id='.$row['MaSP'].'" class="btn btn-success" >Mua ngay</a>
	  <a class="btn btn-primary" id = "add" >Thêm vào giỏ hàng</a>
	  </div>
	  </div></div>';
      }
    }
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
"id:'".$id."'";
	?>
,success: function(){
       }
   });
});
</script>
<?php include 'foot.php' ?>

