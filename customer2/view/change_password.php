<link rel="stylesheet" type="text/css" href="../view/css/styleChangePassword.css">
    <!--main section-->
    <main class="main">
        <div class="page-heading">
            <div class="container">
                <div id="date-send" style="padding-top: 10px; color: #a5a2a2; font-size: 12px;">Ngày chỉnh sửa: </div>
                <hr>
            </div>
        </div>
        <div class="notification-container">
            <botton id="back-button" class="back-button">Trở về</botton>
            <hr style="margin-top: 10px; margin-bottom: 10px;">
            <h1 id="notification-title">Thay đổi mật khẩu</h1>
            <div style="display: flex; width: 100%; align-items: center; justify-content: center; padding-bottom: 5px;">
                <div class="line-tt-pg"></div>
                <img class="img-tt-pg" src="../view/img/logo.png">
                <div class="line-tt-pg"></div>
            </div>

            <form class="contents">
                <p>Nhập mật khẩu cũ</p>
                <input class="input-field" type="password" placeholder="Mật khẩu" autocomplete="tel" name="user_pass_old" aria-invalid="false">
                <hr style="margin: 20px;">
                <p>Nhập mật khẩu mới</p>
                <input class="input-field" type="password" placeholder="Mật khẩu" autocomplete="tel" name="user_pass_new_1" aria-invalid="false">
                <p>Nhập lại mật khẩu mới</p>
                <input class="input-field" type="password" placeholder="Mật khẩu" autocomplete="tel" name="user_pass_new_2" aria-invalid="false">
                <hr style="margin-top: 10px;">
                <div class="button-container">
                    <button id="edit-btn" type="button" onclick="showAddProductForm()">Change Password</button>
                </div>

                <div id="backround-form-buttons" class="confirmation-box">
                    <div class="form-yes">
                        <h2>Bạn có chắc chắn Xác nhận sửa đổi không.</h2>
                        <div class="form-buttons">
                            <button id="confirm-btn-yes" name="">Xác nhận</button>
                            <button id="cancel-btn" type="button" name="cancel" onclick="hideAddProductForm()">Hủy</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
        function showAddProductForm() {
            document.getElementById('backround-form-buttons').style.display = 'flex';
        }

        function hideAddProductForm() {
            document.getElementById('backround-form-buttons').style.display = 'none';
        }

        const dateSendElement = document.getElementById('date-send');
        if (dateSendElement) {
            const currentDate = new Date();
            const formattedDate = formatDate(currentDate);
            dateSendElement.innerText = `Ngày chỉnh sửa: ${formattedDate}`;
        }

        function formatDate(date) {
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}-${month}-${year}`;
        }
    </script>
    <script type="text/javascript" src="../view/js/script.js"></script>
</body>
</html>
