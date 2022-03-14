 <?php include 'head.php';
    // Lấy thông tin đã nhập
    $username = $_POST['username'];
    $email =$_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['password2'];
    // Kết nối db
    $conn = mysqli_connect('localhost','root','','shop');
    if(!$conn){
        die("Không thể kết nối");
    }

    $sql = "SELECT * FROM user WHERE username LIKE $username";
    $result = mysqli_query($conn,$sql);
    if (!$result){
        if ($pass1 != $pass2){
            echo '<div style="text-align:center">';
            echo '<h1>2 mật khẩu không khớp.</h1>';
            echo '<a href="register.php">Thử lại</a>';
            echo '</div>';
        }else{
            $pass_md5 = md5($pass1);
            $sql = "INSERT INTO user VALUES ('$username','$pass_md5','$email', '0')";
            $result = mysqli_query($conn, $sql);
            if (!$result){
                echo '<div style="text-align:center">';
                echo '<h1>Tên đăng nhập đã tồn tại.</h1>';
                echo '<a href="register.php">Thử lại</a>';
                echo '</div>';
            }
        }
    }else{
        echo '<div style="text-align:center">';
        echo '<h1>Tên người dùng phải có ký tự chữ.</h1>';
        echo '<a href="register.php">Thử lại</a>';
        echo '</div>';
    }
?>
<?php include 'foot.php' ?>