<?php include "../model/checkout.php";?>
<link rel="stylesheet" type="text/css" href="../view/css/checkout.css">
    <!--main section-->
    <main class="main">
        <div class="page-heading">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.php?act=product">Sản phẩm</a></li> /
                    <li>Giỏ hàng</li> /
                    <li id="page-active">Đơn hàng</li>
                </ul>
                <div id="date-send" style="padding-top: 10px; color: #a5a2a2; font-size: 12px;"></div>
                <hr>
            </div>
        </div>
        <form class="detail-container" method="POST" >
            <h1 id="detail-title">Chi tiết Đơn hàng</h1>
            <div style="display: flex; width: 100%; align-items: center; justify-content: center; padding-bottom: 5px;">
                <div class="line-tt-pg"></div>
                <img class="img-tt-pg" src="../view/img/logo.png">
                <div class="line-tt-pg"></div>
            </div>
            <div id="contents">
                <b style="margin-left: 5px;">Sản phẩm đặt mua:</b>
                <div class="detail-products"></div>
            </div>
            <div class="inf-cus-order">
                <b>Thông tin người nhận hàng:*</b>
                <div class="detail-inf-cus-order">
                    <input class="input-name" type="text" placeholder="Tên người nhận" autocomplete="tel" name="name" aria-invalid="false" value="<?php echo $result['user_name']; ?>">
                    <input class="input-phone" type="text" placeholder="Số điện thoại" autocomplete="tel" name="phone" aria-invalid="false" value="<?php echo $result['phone_number']; ?>">
                </div>
            </div>
            <div class="delivery-method">
                <fieldset style="padding: 10px 20px; margin-bottom: 20px; display: flex; flex-direction: column; gap: 10px;">
                    <legend style="margin: 0 20px;">
                        <b>Phương thức giao hàng:*</b>
                    </legend>
                    <div>
                        <input type="radio" id="standard" name="delivery" value="standard">
                        <label for="standard">Đến nhận tại cửa hàng</label>
                    </div>
                    <div>
                        <input type="radio" id="express" name="delivery" value="express" disabled>
                        <label for="express" style="color:#a5a2a2;">Giao hàng tận nơi</label>
                    </div>
                </fieldset>
            </div>
            <div class="payment-method">
                <fieldset style="padding: 10px 20px; margin-bottom: 20px; display: flex; flex-direction: column; gap: 10px;">
                    <legend style="margin: 0 20px;">
                        <b>Phương thức thanh toán:*</b>
                    </legend>
                    <div>
                        <input type="radio" id="standard-pm" name="payment" value="standard-pm">
                        <label for="standard-pm">Thanh toán trực tiếp</label>
                    </div>
                    <div>
                        <input type="radio" id="express-pm" name="payment" value="express-pm" disabled>
                        <label for="express-pm" style="color:#a5a2a2;">Thanh toán trực tuyến</label>
                    </div>
                </fieldset>
            </div>
            <div class="sale-method" style="gap: 10px; display: flex; flex-direction: column;">
                <b>Mã khuyến mãi:</b>
                <div>
                    <input type="text" id="promo-code" name="promo-code" placeholder="Nhập mã khuyến mãi">
                    <button type="button" id="apply-promo">Áp dụng</button>
                </div>
                <div id="noice-sale-method"></div>
            </div>
            <div id="money-total">
                <b>Tổng tiền: </b>
                <p id="total-mn"></p>
            </div>

            <!-- hidden form -->
            <input type="hidden" id="cart_data" name="cart_data">
            <input type="hidden" id="total_amount" name="total_amount">
            <input type="hidden" id="order_date" name="order_date">
            <button id="ok-button" class="yes-button" name="btn">Đặt hàng</button>
        </form>

    </main>
    <script type="text/javascript" src="../view/js/product.js"></script>
    <script>
        document.getElementById('ok-button').addEventListener('click', function(e) {
        // Lấy dữ liệu giỏ hàng từ localStorage
        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Kiểm tra nếu giỏ hàng trống
        if (cart.length === 0) {
            alert("Giỏ hàng trống, vui lòng thêm sản phẩm vào giỏ hàng.");
            e.preventDefault(); // Ngăn chặn submit form nếu giỏ hàng trống
            return;
        }
        // Đổ dữ liệu từ localStorage vào các trường ẩn
        document.getElementById('cart_data').value = JSON.stringify(cart);
        const totalAmount = cart.reduce((total, item) => total + parseCurrency(item.price) * item.quantity, 0);
        document.getElementById('total_amount').value = formatCurrency(totalAmount);
    
        // Ngày đặt hàng
        const dateSendElement = document.getElementById('order_date');
        if (dateSendElement) {
            const currentDate = new Date();
            const formattedDate = formatDate(currentDate);
            dateSendElement.value = `${formattedDate}`;
        }

        });    
        function parseCurrency(value) {
            return parseFloat(value.replace(/\./g, '').replace('đ', ''));
        }
    
        function formatCurrency(value) {
            return value.toLocaleString({ style: 'currency'});
        }

        function formatDate(date) {
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            const hours = String(date.getHours()).padStart(2, '0');
            const minutes = String(date.getMinutes()).padStart(2, '0');
            const seconds = String(date.getSeconds()).padStart(2, '0');
            return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
        }
    </script>

    
    
