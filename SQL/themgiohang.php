<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:./login.php");
  }
  $username = $_SESSION["username"];
  $id = $_GET['id'];
  include 'head.php';
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  };
  $sql = "INSERT INTO giohang(username,MaSP,SoLuong)VALUES('$username','$id',1);";
  mysqli_query($conn, $sql);
  header("Location:./giohang.php");
?>