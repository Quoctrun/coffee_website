<?php 
    include "connect.php";

    session_start();

    if(isset($_POST['submit'])){
        $phone_number = $_POST['phone_number'];
        $user_pass = $_POST['user_pass'];

        $sql = "SELECT* FROM user WHERE phone_number = '$phone_number' AND user_pass = '$user_pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_assoc($result);
            $_SESSION['mySession'] = $user['user_id'];
            header("location:../controller/index.php");
        }else{
            echo "Incorrect account name or password!";
        }
    }
?>