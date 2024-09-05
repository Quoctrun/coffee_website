<?php
include "connect.php";

if(!isset($_SESSION['mySession'])){
    header('location: ../view/sign_in.php');
}
else{
    $user_id = $_SESSION['mySession'];
    $sql = "SELECT * FROM `user` WHERE user_id = '$user_id'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
}

if (isset($_POST["btn"])) {
    $cartData = json_decode($_POST['cart_data'], true);
    $totalAmount = $_POST['total_amount'];
    $orderDate = $_POST['order_date'];

    $sql = "INSERT INTO `order`(total_payment, order_time, Status, user_id) 
    VALUES ('$totalAmount', '$orderDate', 'Pending', '$user_id')";

    if ($conn->query($sql)) {
        $orderId = $conn->insert_id;

        foreach ($cartData as $item) {
            $productId =$item['id'];
            $quantity = $item['quantity'];

            $insertOrderDetails = "INSERT INTO orderdetail (order_id, product_id, quantity) 
            VALUES ('$orderId', '$productId', '$quantity')";
            $conn->query($insertOrderDetails);
        }

        echo "Đặt hàng thành công!";
        header("location: ../controller/index.php?act=product");
    } else {
        echo "Lỗi: " . $mysqli->error;
    }
}
$conn->close();
?>
