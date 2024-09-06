<?php
    session_start();
    if(!isset($_SESSION['mySession'])){
        header('location: ../view/sign_in.php');
    }
?>

<?php include "../model/add_product.php"; ?>
<?php include "../model/manage_products.php"; ?>
<link rel="stylesheet" href="../view/css/products.css">
    <main>
        <div class="container-overview-all">
            <fieldset>
                <legend><h1>Tổng quan Sản Phẩm</h1></legend>
                <div class="overview-all">
                    <div class="overview-item" data-category="">
                        <h2><?php echo $qantity_of_product ?></h2>
                        <p>Tổng Sản phẩm</p>
                    </div>
                    <div class="overview-item" data-category="1">
                        <h2><?php echo $qantity_of_coffee ?></h2>
                        <p>Coffee (Nước)</p>
                    </div>
                    <div class="overview-item" data-category="2">
                        <h2><?php echo $qantity_of_tea ?></h2>
                        <p>Trà (Nước)</p>
                    </div>
                    <div class="overview-item" data-category="3">
                        <h2><?php echo $qantity_of_cake ?></h2>
                        <p>Bánh</p>
                    </div>
                </div>
            </fieldset>
        </div>
        
        <?php
        // Kiểm tra nếu có dữ liệu tìm kiếm từ form
        $searchValue = isset($_POST['content']) ? $_POST['content'] : ''; // Lưu trữ giá trị tìm kiếm
        ?>
        <form class="search-container" method="POST">
            <input type="search" name="content" class="search-input" placeholder="Tìm kiếm..." aria-label="Search" value="<?php echo htmlspecialchars($searchValue); ?>">
            <button name="search" class="search-button" aria-label="Search Button"><i class='bx bx-search'></i></button>
        </form>

         <!-- Add Product Button -->
    <button class="add-product-button" onclick="showElementById('addProductFr')">Thêm Sản Phẩm</button>

    <!-- Product Addition Form (Initially Hidden) -->
    <div id="addProductFr" style="display: none;">
    <form id="addProductForm" method="post" enctype="multipart/form-data">
        <h3>Thêm Sản phẩm Mới</h3>
        <p>Loại sản phẩm</p>
        <select name="ca_id">
            <option value="1">Caffe</option>
            <option value="2">Trà</option>
            <option value="3">Bánh</option>
        </select>

        <p>Tên sản phẩm</p>
        <input type="text" name="pro_name">

        <p>Hình ảnh</p>
        <input type="file" name="img">

        <p>Giá tiền</p>
        <input type="text" name="price">
        <br>
        <div class="form-buttons">
            <button id="br" onclick="showAddProductFormYes()">Gửi</button>
            <button type="button" name="cancel" onclick="hideElementById('addProductFr')">Hủy</button>
        </div>

        <div id="backround-form-buttons">
            <div class="form-yes" style="width: 30%; height: 30%;">
                <h2 style="justify-content: center; display: flex; height: 55%;">Bạn có chắc chắn Xác nhận sửa đổi không.</h2>
                <div class="form-buttons">
                    <button id="submit br" type="submit" name="submit">Xác nhận</button>
                    <button id ="br" type="button" onclick="hideAddProductFormYes()">Hủy</button>
                </div>
            </div>
        </div>
    </form>
    </div>

        <h2>Product List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="product-list">
            <?php include "../model/display_product.php"; ?>
            </tbody>
        </table>
    </main>
    <script src="../view/js/products.js"></script>
</body>
</html>
