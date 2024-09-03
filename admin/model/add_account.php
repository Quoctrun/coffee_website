<?php 
    include "connect.php";

    if (isset($_POST['add'])) {
        $user_name = $_POST['user_name'];
        $user_pass = $_POST['user_pass'];
        $phone_number = $_POST['phone_number'];
        $level = $_POST['level'];

        // Câu truy vấn SQL để thêm sản phẩm mới vào cơ sở dữ liệu
        $sql = "INSERT INTO `user` (user_name, user_pass, phone_number, level) 
                VALUES ('$user_name', '$user_pass', '$phone_number', '$level')";

        // Thực hiện truy vấn
        if (mysqli_query($conn, $sql)) {
            header("Location: manage-accounts.php");
            exit();
            echo "Thêm sản phẩm thành công!";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    }
?>
