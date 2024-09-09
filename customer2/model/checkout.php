<?php
include "connect.php";

if(!isset($_SESSION['mySession'])){
    header('location: ../view/sign_in.php');
}
?>

<div id="notification-popup">
    <div class="notification-content">
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
        window.location.href = 'index.php?act=product';
    }

<?php
include "connect.php";

    $user_id = $_SESSION['mySession'];
    $sql = "SELECT * FROM `user` WHERE user_id = '$user_id'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

if (isset($_POST["btn"])) {
    $cartData = json_decode($_POST['cart_data'], true);
    $totalAmount = $_POST['total_amount'];
    $orderDate = $_POST['order_date'];
    $order_address = $_POST['order_address'];

    $sql = "INSERT INTO `order`(total_payment, order_time, Status, user_id, order_address) 
    VALUES ('$totalAmount', '$orderDate', 'Pending', '$user_id', '$order_address')";

    if ($conn->query($sql)) {
        $orderId = $conn->insert_id;

        foreach ($cartData as $item) {
            $productId =$item['id'];
            $quantity = $item['quantity'];

            $insertOrderDetails = "INSERT INTO orderdetail (order_id, product_id, quantity) 
            VALUES ('$orderId', '$productId', '$quantity')";
            $conn->query($insertOrderDetails);
        }

        echo "showNotification('Đặt hàng thành công!! (:');";
        //echo "<script>window.location.href = '../controller/index.php?act=edit_account';</script>";
    } else {
        echo "showNotification('Lỗi: " . $mysqli->error . "!! :( ');";
        //echo "Lỗi: " . $mysqli->error;
    }
}
$conn->close();
?>
</script>