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
    Thông Tin Đơn Hàng


<?php include 'foot.php' ?>