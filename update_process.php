<?php
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

    $sql="INSERT INTO sanpham VALUES ('$masanpham','$tensanpham', '$loai', '$gia','$file_name','$mota')";
    $result=mysqli_query($conn, $sql);

    copy($file_tmp,'img/'.$file_name.'');
   // header("Location:index.php");
?>