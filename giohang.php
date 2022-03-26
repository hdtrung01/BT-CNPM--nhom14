<?php
session_start();
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
  include 'head.php'
?>
<!-- poster -->
<!-- Slide -->

<div class="giohang_body" style = "margin: 100px;">
  <h3 class="sanpham">Giỏ Hàng:</h3>
    <?php
    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Sản Phẩm</th>
        <th scope="col"></th>
        <th scope="col">Giá(VNĐ)</th>
        <th scope="col">Số Lượng</th>
        <th scope="col">Thành Tiền(VNĐ)</th>
        <th scope="col"></th>
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
        <td>
        <a href="themgiohang.php?id='.$row['MaSP'].'&sl=-1&loai=add" style="text-decoration: none;color: #000">-</a>&nbsp;'.$row['SoLuong'].'&nbsp;
        <a href="themgiohang.php?id='.$row['MaSP'].'&sl=1&loai=add" style="text-decoration: none;color: #000">+</a></td>
        <td>'.number_format($row['Gia']*$row['SoLuong']).'</td>
        <th scope="row"><a href="themgiohang.php?id='.$row['MaSP'].'&loai=delete" style="text-decoration: none;color: #000">Xóa</a></th>
      </tr>';
      }
    }
    echo '    </tbody>
    </table>';
    ?>
        <div class="btn-foot">
          <div class="btn-foot_button">
            <a href="sanpham.php"class="btn-foot_1">Chọn Thêm</a>
            <a href="dathang.php"class="btn-foot_2">Đặt Hàng</a>
          </div>
          <div class="btn-foot_tongtien">
            <td class="sum-money">Tổng tiền:</td>
            <td>2000000</td>
            <td>(VNĐ)</td>
          </div>
        </div>
</div>
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
