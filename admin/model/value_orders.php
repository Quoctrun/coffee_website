<?php
    include "connect.php";
    $sql_order = "INSERT INTO `order` (`total_payment`, `order_time`, `Status`, `user_id`) 
    VALUES
        (65000, '2024-08-20 10:30:00', 'Pending', 10000),
        (75000, '2024-08-20 11:00:00', 'Shipped', 10001),
        (30000, '2024-08-20 12:00:00', 'Delivered', 10002),
        (205000, '2024-08-20 13:00:00', 'Cancelled', 10003),
        (70000, '2024-08-20 14:00:00', 'Pending', 10004),
        (85000, '2024-08-20 15:00:00', 'Shipped', 10005),
        (150000, '2024-08-20 16:00:00', 'Delivered', 10006),
        (115000, '2024-08-20 17:00:00', 'Cancelled', 10007),
        (50000, '2024-08-20 18:00:00', 'Pending', 10008),
        (140000, '2024-08-20 19:00:00', 'Shipped', 10009),
        (125000, '2024-08-20 20:00:00', 'Delivered', 10010),
        (100000, '2024-08-20 21:00:00', 'Cancelled', 10011),
        (155000, '2024-08-20 22:00:00', 'Pending', 10012),
        (110000, '2024-08-21 08:00:00', 'Shipped', 10013),
        (130000, '2024-08-21 09:00:00', 'Delivered', 10014),
        (100000, '2024-08-21 10:00:00', 'Cancelled', 10015),
        (135000, '2024-08-21 11:00:00', 'Pending', 10016),
        (100000, '2024-08-21 12:00:00', 'Shipped', 10017),
        (135000, '2024-08-21 13:00:00', 'Delivered', 10018),
        (130000, '2024-08-21 14:00:00', 'Cancelled', 10019),
        (170000, '2024-08-21 15:00:00', 'Pending', 10020),
        (190000, '2024-08-21 16:00:00', 'Shipped', 10021),
        (195000, '2024-08-21 17:00:00', 'Delivered', 10022),
        (135000, '2024-08-21 18:00:00', 'Cancelled', 10023),
        (165000, '2024-08-21 19:00:00', 'Pending', 10024),
        (170000, '2024-08-21 20:00:00', 'Shipped', 10025),
        (190000, '2024-08-21 21:00:00', 'Delivered', 10026),
        (195000, '2024-08-21 22:00:00', 'Cancelled', 10027),
        (185000, '2024-08-22 08:00:00', 'Pending', 10028),
        (185000, '2024-08-22 09:00:00', 'Shipped', 10029),
        (80000, '2024-08-22 10:00:00', 'Delivered', 10030),
        (165000, '2024-08-22 11:00:00', 'Cancelled', 10031),
        (195000, '2024-08-22 12:00:00', 'Pending', 10032),
        (250000, '2024-08-22 13:00:00', 'Shipped', 10033),
        (160000, '2024-08-22 14:00:00', 'Delivered', 10034),
        (185000, '2024-08-22 15:00:00', 'Cancelled', 10035),
        (130000, '2024-08-22 16:00:00', 'Pending', 10036),
        (190000, '2024-08-22 17:00:00', 'Shipped', 10037),
        (220000, '2024-08-22 18:00:00', 'Delivered', 10038),
        (190000, '2024-08-22 19:00:00', 'Cancelled', 10039),
        (185000, '2024-08-22 20:00:00', 'Pending', 10040),
        (195000, '2024-08-22 21:00:00', 'Shipped', 10041),
        (170000, '2024-08-22 22:00:00', 'Delivered', 10042),
        (170000, '2024-08-23 08:00:00', 'Cancelled', 10043),
        (205000, '2024-08-23 09:00:00', 'Pending', 10044),
        (170000, '2024-08-23 10:00:00', 'Shipped', 10045),
        (155000, '2024-08-23 11:00:00', 'Delivered', 10046),
        (165000, '2024-08-23 12:00:00', 'Cancelled', 10047),
        (145000, '2024-08-23 13:00:00', 'Pending', 10048),
        (165000, '2024-08-23 14:00:00', 'Shipped', 10049)";

    mysqli_query($conn, $sql_order);


    $conn->close();
?>

?>