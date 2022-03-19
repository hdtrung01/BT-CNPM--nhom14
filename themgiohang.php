<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:./login.php");
  }
  $username = $_SESSION["username"];
  $id = $_GET['id'];
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  };
  $sql = "SELECT * from giohang where username = '$username' and MaSP = '$id'";
  $result=mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $sql = "UPDATE giohang SET soluong = soluong + 1 WHERE username='$username' AND MaSP = '$id'";
    mysqli_query($conn, $sql);
  }else{
    $sql = "INSERT INTO giohang(username,MaSP,SoLuong)VALUES('$username','$id',1);";
    mysqli_query($conn, $sql);
    }
  header("Location:./giohang.php");
?>