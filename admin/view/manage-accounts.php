<?php
    session_start();
    if(!isset($_SESSION['mySession'])){
        header('location: ../view/sign_in.php');
    }
?>

<?php include "../model/manage_account.php"; ?>
<?php include "../model/add_account.php"; ?>
<link rel="stylesheet" href="../view/css/accounts.css">
    <main>
        <div class="container-overview-all">
            <fieldset>
                <legend><h1>Tổng quan Tài Khoản</h1></legend>
    
                <div class="overview-all">
                    <div class="overview-item" data-category="">
                        <h2 id="totalAccounts"><?php echo $qantity_of_user ?></h2>
                        <p>Tổng số Tài Khoản</p>
                    </div>
                    <div class="overview-item" data-category="0">
                        <h2 id="adminAccounts"><?php echo $qantity_of_user_admin_level ?></h2>
                        <p>Tài Khoản (Admin)</p>
                    </div>
                    <div class="overview-item" data-category="1">
                        <h2 id="customerAccounts"><?php echo $qantity_of_user_customer_level ?></h2>
                        <p>Tài Khoản (Khách hàng)</p>
                    </div>
                </div>
            </fieldset>
        </div>
    
        <form class="search-container" method="POST" action="">
            <input type="search" name="content" class="search-input" placeholder="Tìm kiếm theo SĐT..." aria-label="Search" value="<?php echo isset($_POST['content']) ? htmlspecialchars($_POST['content']) : ''; ?>">
            <button type="submit" name="search" class="search-button" aria-label="Search Button">
                <i class='bx bx-search'></i>
            </button>
        </form>
    
        <button class="add-account-button" onclick="showAddAccountForm()">Thêm Tài Khoản</button>

        <div id="addAccountForm" style="display: none;">
            <form method="POST">
                <h3>Thêm Tài Khoản Mới</h3>
                <label for="accountName">Tên Tài Khoản:</label>
                <input class="input-name" type="text" placeholder="Tên tài khoản" autocomplete="tel" name="user_name" aria-invalid="false">
                <label for="accountPhone">Số điện thoại:</label>
                <input class="input-phone" type="text" placeholder="Số điện thoại" autocomplete="tel" name="phone_number" aria-invalid="false">
                <label for="accountPassword">Mật khẩu:</label>
                <input class="input-password" type="password" placeholder="Mật khẩu" autocomplete="tel" name="user_pass" aria-invalid="false">
                <label for="accountRole">Vai trò:</label>
                <select id="accountRole" name="level">
                    <option value="0">Admin</option>
                    <option value="1">Khách hàng</option>
                </select><br>
                <div class="form-buttons">
                    <button type="submit" name="add">Thêm Tài Khoản</button> <!-- Đổi từ type="button" thành type="submit" -->
                    <button type="button" name="cancel" onclick="hideAddAccountForm()">Hủy</button>
                </div>
            </form>
        </div>
    
        <h2>Danh sách tài khoản</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Số điện thoại</th>
                    <th>Vai trò</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="accounts-list">
            <?php include "../model/display_account.php"; ?>
            </tbody>
        </table>
    </main>
    
    <script src="../view/js/accounts.js"></script>
</body>
</html>
