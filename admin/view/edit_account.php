<?php include "../model/admin_infor.php" ?>
<?php include "../model/edit_account.php" ?>

<link rel="stylesheet" type="text/css" href="../view/css/edit_account.css">
    <!--main section-->
    <main class="main">
        <div class="page-heading">
            <div class="container">
                <div id="date-send" style="padding-top: 10px; color: #a5a2a2; font-size: 12px;">Ngày chỉnh sửa: </div>
                <hr>
            </div>
        </div>
        <div class="notification-container">
            <botton id="back-button" class="back-button" onclick="location.href='../controller/index.php'">Trở về</botton>
            <hr style="margin-top: 10px; margin-bottom: 10px;">
            <h1 id="notification-title">Chỉnh sửa tài khoản</h1>
            <div style="display: flex; width: 100%; align-items: center; justify-content: center; padding-bottom: 5px;">
                <div class="line-tt-pg"></div>
                <img class="img-tt-pg" src="../view/img/logo.png">
                <div class="line-tt-pg"></div>
            </div>

            <form class="contents" method = "POST">
                <p>Tên tài khoản</p>
                <input type="text" name="user_name" value="<?php echo $user_infor['user_name']; ?>" class="input-field">
                <p>Số điện thoại</p>
                <input type="text" name="phone_number" value="<?php echo $user_infor['phone_number']; ?>" class="input-field">
                <hr style="margin-top: 10px;">
                <div class="button-container">
                    <button id="edit-btn" onclick="showAddProductForm()">Edit</button>
                    <button id="change-password-btn" type="button" onclick="location.href='index.php?act=change_password'">Change Password</button>
                </div>

                <div id="backround-form-buttons" class="confirmation-box">
                    <div class="form-yes">
                        <h2>Bạn có chắc chắn Xác nhận sửa đổi không.</h2>
                        <div class="form-buttons">
                            <button id="confirm-btn-yes"name="btn" type="submit">Xác nhận</button>
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

        document.getElementById("edit-btn").addEventListener("click", function(event) {
            event.preventDefault();
        })
    </script>