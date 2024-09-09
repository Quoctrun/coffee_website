<div id="notification-popup" style="display: none;">
    <div class="notification-content" style="width: 30%; height: 20%;">
        <h2 id="notification-message" style="justify-content: center; display: flex; height: 55%;"></h2>
        <div class="form-buttons" style="width: 100%; align-items: center; flex-direction: column;">
            <button class="button-ex" onclick="closeNotification()">Đóng</button>
        </div>
    </div>
</div>

<script>
    function showNotification(message) {
    document.getElementById('notification-message').innerText = message;
    document.getElementById('notification-popup').style.display = 'flex';
    }

    function closeNotification() {
        document.getElementById('notification-popup').style.display = 'none';
        window.location.href = '../controller/index.php?act=manage-accounts';
    }


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
            echo "showNotification('Thêm tài khoản mới thành công');";
           // exit();
        } else {
            echo "<script>
            alert('Lỗi: " . mysqli_error($conn) . "');
            </script>";
        }
    }
?>
</script>