<?php
    include 'connect.php';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $user_id = $_SESSION['mySession'];

    if (isset($_POST['btn'])) {
        $user_pass_old = $_POST['user_pass_old'];
        $user_pass_new_1 = $_POST['user_pass_new_1'];
        $user_pass_new_2 = $_POST['user_pass_new_2'];

        if ($user_pass_new_1 !== $user_pass_new_2) {
            echo "Mật khẩu mới không khớp.";
        }
        else{
            $sql = "SELECT * FROM `user` WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $user_pass = mysqli_fetch_assoc($result);


                if ($user_pass_old == $user_pass['user_pass']) {
                    $sql_update = "UPDATE `user` SET user_pass = '$user_pass_new_1' WHERE user_id = $user_id";

                    if (mysqli_query($conn, $sql_update)) {
                        echo "Mật khẩu đã được thay đổi thành công.";
                        echo "<script>window.location.href = '../controller/index.php?act=edit_account';</script>";
                        exit();
                    } else {
                        echo "Có lỗi xảy ra khi thay đổi mật khẩu.";
                    }
                } else {
                    echo "Mật khẩu cũ không đúng.";
                }
            } else {
                echo "Lỗi truy vấn: " . mysqli_error($conn);
            }
        }

    mysqli_close($conn);
}
?>
