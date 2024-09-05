<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caffe Monster</title>
    <link rel="icon" type="image" href="../view/img/logo-tap.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--header section-->
    <header class="header">
        <a href="#"><img src="../view/img/logo.png" class="logo" alt="Caffe Monster Logo"></a>
        <div class="mobile"><a href="#" id="bar" aria-label="Open Navigation Menu"><i class='bx bx-menu'></i></a></div>
        <nav id="navbar" role="navigation">
            <ul>
                <li><a class="nav-index active" href="index.php">Trang chủ</a></li>
                <li>
                    <a class="nav-prd" href="index.php?act=product">Sản phẩm</a>
                </li>
                <li><a class="nav-sale" href="index.php?act=sale">Khuyến mãi</a></li>
                <a href="#" id="close" aria-label="Close Navigation Menu"><i class='bx bx-x'></i></a>
            </ul>
        </nav>        
        <from class="search-container">
            <input type="search" class="search-input" placeholder="Tìm kiếm..." aria-label="Search">
            <button class="search-button" aria-label="Search Button"><i class='bx bx-search'></i></button>
        </from>
        <div class="cart">
            <a href="#"><i id="bx" class='bx bx-cart'></i><sub>0</sub></a>
            <div class="cart-items">
                <div class="cart-item"></div>
                <div class="cart-summary">
                    <div class="cart-total">Tổng tiền: 0 VNĐ</div>
                    <a href="index.php?act=checkout" class="checkout-button" id="bx">Thanh toán</a>
                </div>                
            </div>
        </div>
        <div id="icon-group">
            <ul>
                <li>
                    <a class="noice" href="#" id="bx"><i class='bx bxs-envelope'></i><sub>0</sub></a>
                    <div class="envelope-items">
                        <div class="envelope-item"></div>
                        <div class="envelope-summary">
                            <a href="#" class="checkread-button" id="markAllRead bx">Đọc tất cả</a>
                        </div>                
                    </div>
                </li>
                <li>
                    <a class="user" href="#"><i class='bx bx-user'></i></a>
                    <ul class="sub2-menu activesup">
                        <li><a href="index.php?act=sign_up">Đăng ký</a></li>
                        <li><a href="index.php?act=sign_in">Đăng nhập</a></li>
                    </ul>
                    <ul class="sub3-menu">
                        <li><a href="index.php?act=purchase_history">Lịch sử mua hàng</a></li>
                        <li><button id="logout">Đăng xuất</button></li>
                    </ul>                    
                </li>
            </ul>
        </div>
    </header>