<?php
include "connect.php";
include "../controller/function.php";

$order_id = $_GET['this_id'];
$STT = 1;

echo "<h1>Cập nhật trạng thái đơn hàng</h1>";
echo "<p><strong>Mã đơn hàng:</strong> " . $order_id . "</p>";
echo "<p><strong>Tên khách hàng:</strong> " . getUserInfor(getOrderInfor($order_id, 'user_id'), 'user_name') . "</p>";
echo "<p><strong>Thời gian đặt hàng:</strong> " . getOrderInfor($order_id, 'order_time') . "</p>";
?>

<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên món</th>
            <th>Số lượng</th>
            <th>Giá tiền</th>
        </tr>
    </thead>
    <tbody id="order-list">  
        <?php foreach (getOrderDetail($order_id) as $row_order_detail){?>
            <tr>
                <td><?php echo $STT++ ?></td>
                <td><?php echo $row_order_detail['product_name']; ?></td>
                <td><?php echo $row_order_detail['quantity']; ?></td>
                <td><?php echo $row_order_detail['price'].'đ'; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
echo "<p><strong>Tổng tiền:</strong> $" . getOrderInfor($order_id, 'total_payment').'đ' . "</p>";
echo "<p><strong>Phương thức thanh toán:</strong> " . "Thanh toán khi nhận hàng" . "</p>";
?>
<?php
if (isset($_POST['bnt'])) {
    $status = $_POST['status'];

    $update_sql = "UPDATE `order` SET Status = '$status' WHERE order_id = '$order_id'";
    if (mysqli_query($conn, $update_sql)) {
        echo "<p>Cập nhật thông tin đơn hàng thành công.</p>";
    } else {
        echo "<p>Lỗi khi cập nhật thông tin: " . mysqli_error($conn) . "</p>";
    }
}

// Lấy thông tin hiện tại của đơn hàng để hiển thị trên form
$order_info = [
    'status' => getOrderInfor($order_id, 'Status')
];

$conn->close();
?>
