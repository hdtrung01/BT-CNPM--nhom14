<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location:./login.php");
}
include 'head.php' ?>
<?php
   if(!isset($_SESSION["username"])){
     header("Location:./login.php");
    }
    $username = $_SESSION["username"];
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  };
  $sql="SELECT * FROM giohang INNER JOIN sanpham on sanpham.MaSP = giohang.MaSP WHERE username = '$username'";
  $result=mysqli_query($conn, $sql);
  
?>
<!-- poster -->
<!-- Slide -->
<div class="giohang_body" style = "margin: 100px">
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
        <td>'.number_format($row['Gia']).'</td>
        <td>'.$row['SoLuong'].'</td>
        <td>'.number_format($row['Gia']*$row['SoLuong']).'</td>
      </tr>';
      }
    }
    echo '    </tbody>
    </table>';
    ?>
</div>

<div class="clearfix"></div>


<!-- footer -->
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
