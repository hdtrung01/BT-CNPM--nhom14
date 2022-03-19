<?php
if(isset($_POST["submit"])) {
    $file_tmp = $_FILES['anh']['tmp_name'];
    $file_name = $_FILES['anh']['name'];
    $tensanpham=$_POST['tensanpham'];
    $masanpham=$_POST['masanpham'];
    $gia=$_POST['gia'];
    $loai=$_POST['loai'];
    $mota=$_POST['mota'];
    $conn = mysqli_connect('localhost','root','','shop');
    if (!$conn){
        die("Ko ket noi duoc");
    }

    $sql="INSERT INTO sanpham(MaSP,TenSP,LoaiSP,Gia,anh,mota) VALUES ('$masanpham','$tensanpham', '$loai', '$gia','$file_name','$mota')";
    $result=mysqli_query($conn, $sql);
    echo $file_name;
    if(copy($file_tmp,'img/'.$file_name.'')){
        echo 'Đăng Sản Phẩm Thành Công';
    };
}else {
    echo 'Có Lỗi Xảy Ra';
}
    //header("Location:index_admin.php");
?>