<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image" href="../view/img/logo-tap.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="logo"><img src="../view/img/logo.png" class="logo" alt="Caffe Monster Logo"></div>
        <div class="containt-navbar">
            <h1>Tổng quan Quản Trị</h1>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php?act=manage-products">Quản lý Sản Phẩm</a></li>
                    <li><a href="index.php?act=manage-orders">Quản lý Đơn Hàng</a></li>
                    <li><a href="index.php?act=manage-accounts">Quản lý Tài Khoản</a></li>
                    <li><a href="index.php?act=manage-sales">Quản lý Khuyến Mãi</a></li>
                    <li><a href="index.php?act=manage-notification">Quản lý thông báo</a></li>
                </ul>
            </nav>
        </div>
        <a href="#" class="user" id="user"><i class='bx bx-user'></i>
            <div class="sub-menu-user">
                <div class="user-names">
                    <b>Tên Tài khoản:</b>
                    <p id="user-name">Admin123</p>
                </div>
                <form method="post" action="../controller/sign_out.php">
                    <button type="submit" id="logout" name="logout">Đăng xuất</button>
                </form>
            </div>
        </a>
    </header>