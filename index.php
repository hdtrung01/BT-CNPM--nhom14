<?php 
 session_start();
require_once 'head.php';
  ?>
<?php
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  }

  $sql="SELECT * FROM sanpham";
  $result=mysqli_query($conn, $sql);
?>

<!-- poster -->
  <style>
      .pt{
        height: 400px;
        width: 90%;
        background: url(img/post1.png);
        margin: 30px auto;
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
      margin: 20px;
      color:red;
      font-size:24px;
      font-weight:bold;
      -webkit-animation: my 700ms infinite;
      -moz-animation: my 700ms infinite; 
      -o-animation: my 700ms infinite; 
      animation: my 700ms infinite;
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
<div class="pt">
</div>
<!-- Danh sach sach' -->
    <div class="khung_hot">
      <h3 class="sanpham">Hot Sell:</h3>
        <?php
          if (mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_assoc($result)){
              echo '<div class="card" style="">';
              echo '<img src="img/'.$row['anh'].'" style="height:500px">';
              echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$row['TenSP'].'</h5>';
                echo '<a href="mua.php?id='.$row['MaSP'].'" class="btn btn-primary">Xem chi tiết.</a>';
              echo '</div>';
              echo '</div>';
            }
          }
          ?>

    </div>
</div>

<div class="clearfix"></div>


<!-- footer -->
</div>
<?php include 'foot.php' ?>
