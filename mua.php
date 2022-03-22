<?php
session_start();
include 'head.php' ?>
<!-- Trang chủ -->
<!-- navbar -->

<!-- CSDL -->
<?php
  $id = $_GET['id'];
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
    <a>Số Lượng</a>
    <input type="number" id="quantity" name="quantity" min="1" max="20" value="1">
	  </br>
    </br>
	  <a id = "mua" class="btn btn-success" >Mua ngay</a>
	  <a class="btn btn-primary" id = "add" >Thêm vào giỏ hàng</a>
	  </div>
	  </div></div>';
      }
    }
    ?>
</div>

<div class="clearfix"></div>


<!-- footer -->
<script>
$('#mua').click(function() {$.ajax({
        type: "GET",
        url: "themgiohang.php",
  <?php
	echo 
"data:{id:'".$id."' , sl:$('#quantity').val() , loai:'add'} ";
	?>
,success: function(data, textStatus, xhr){
        if(xhr.status == 200){
          window.location.href = 'giohang.php';
        }
       }
   });
});
$('#add').click(function() {$.ajax({
        type: "GET",
        url: "themgiohang.php",
  <?php
	echo 
"data:{id:'".$id."' , sl:$('#quantity').val() , loai:'add'} ";
	?>
,success: function(data, textStatus, xhr){
        if(xhr.status == 200){
          $('#add').html('Đã Thêm Vào Giỏ Hàng') ;
          $('#add').off('click');
        }
       }
   });
});
</script>
<?php include 'foot.php' ?>

