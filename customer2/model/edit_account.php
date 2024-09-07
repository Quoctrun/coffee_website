<?php
    include "connect.php";
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $user_id = $_SESSION['mySession'];
    
    if(isset($_POST['btn'])){
        $user_name = $_POST['user_name'];
        $phone_number = $_POST['phone_number'];
        
        $sql = "UPDATE `user` SET user_name = '$user_name', phone_number ='$phone_number' WHERE user_id = '$user_id'";
        
        if(mysqli_query($conn, $sql)){
            header("Location: ../controller/index.php?act=edit_account");
            exit();
        }
        else{
            echo "sai";
        }
    
    }

?>


