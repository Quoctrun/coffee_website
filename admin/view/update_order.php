<?php
include "../model/update_order.php";
?>

<form method="post">
    <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">

    <p>
    <strong><label for="status">Trạng thái đơn hàng:</label></strong>
        <select id="status" name="status">
            <option value="Pending" <?php echo $order_info['status'] == 'Pending' ? 'selected' : ''; ?>>Chờ xử lý</option>
            <option value="Shipping" <?php echo $order_info['status'] == 'Shipping' ? 'selected' : ''; ?>>Đang giao hàng</option>
            <option value="Delivered" <?php echo $order_info['status'] == 'Delivered' ? 'selected' : ''; ?>>Đã giao hàng</option>
            <option value="Cancelled" <?php echo $order_info['status'] == 'Cancelled' ? 'selected' : ''; ?>>Đã hủy</option>
        </select>
    </p>

    <p>
        <input type="submit" value="Cập Nhật" name = "bnt">
    </p>
</form>

<button onclick="location.href='../controller/index.php?act=manage-orders'">Trở về</button>