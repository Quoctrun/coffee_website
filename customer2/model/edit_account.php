<?php
    include "connect.php";
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $user_id = $_SESSION['mySession'];
    
    if(isset($_POST['btn'])){
        $user_name = $_POST['user_name'];
        $phone_number = $_POST['phone_number'];

        $sql = "SELECT COUNT(*) FROM user WHERE phone_number = '$phone_number'";
        $result = mysqli_query($conn, $sql);
        $row_phone = mysqli_fetch_array($result);

        if ($row_phone[0] > 0) {
            echo "số điện thoại đã được sử dụng";
        }
        else{
            $sql = "UPDATE `user` SET user_name = '$user_name', phone_number ='$phone_number' WHERE user_id = '$user_id'";
        
            if(mysqli_query($conn, $sql)){
                echo "<script>window.location.href = '../controller/index.php?act=edit_account';</script>";
                exit();
            }
            else{
                echo "sai";
            }
        }
        
        
    
    }

?>


