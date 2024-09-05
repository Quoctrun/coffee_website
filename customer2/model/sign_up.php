<?php 
include "connect.php";
if(isset($_POST['submit'])){
    $phone_number = $_POST['phone_number'];

    // Kiểm tra số điện thoại đã được sử dụng
    $sql = "SELECT COUNT(*) FROM user WHERE phone_number = '$phone_number'";
    $result = mysqli_query($conn, $sql);
    $row_phone = mysqli_fetch_array($result);

    if ($row_phone[0] > 0) {
        // Nếu số điện thoại đã được sử dụng, hiển thị thông báo lỗi
        echo "<script>alert('Số điện thoại đã được sử dụng!'); window.history.back();</script>";
    } else { ?>
        <!-- Form chuyển hướng đến trang sign_up_continue.php với phương thức POST -->
        <form action="../view/sign_up_continue.php" method="post">
            <input type="hidden" name="phone_number" value="<?php echo $phone_number; ?>">
            <script>
                document.forms[0].submit();
            </script>
        </form>
    <?php }
}
   


mysqli_close($conn);
?>
