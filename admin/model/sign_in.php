<?php 
    include "connect.php";

    session_start();

    if(isset($_POST['submit'])){
        $phone_number = $_POST['phone_number'];
        $user_pass = $_POST['user_pass'];

        $sql = "SELECT* FROM user WHERE phone_number = '$phone_number' AND user_pass = '$user_pass' AND level = 0";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_assoc($result);
            $_SESSION['mySession'] = $user['user_id'];
            header("location:../controller/index.php");
        }else{
            echo "<script>
            alert('Số điện thoại không hợp lệ hoặc Mật khẩu sai!!');
            window.location.href = '../view/sign_in.php';
            </script>";
        }
    }
?>