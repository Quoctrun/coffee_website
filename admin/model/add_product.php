<?php 
    include "connect.php";
    include "../controller/function.php";

    if (isset($_POST['submit'])) {
        $ca_id = $_POST['ca_id'];
        $pro_name = $_POST['pro_name'];
        $image = $_FILES['img']['name'];  // Lấy tên của ảnh
        $image_tmp_name = $_FILES['img']['tmp_name'];  // Lấy đường dẫn tạm thời của ảnh
        $price = $_POST['price'];
        $status = "hidden";

        // Câu truy vấn SQL để thêm sản phẩm mới vào cơ sở dữ liệu
        $sql = "INSERT INTO product (ca_id, product_name, price, img, status) 
                VALUES ('$ca_id', '$pro_name', '$price', '$image', '$status')";

        // Thực hiện truy vấn
        if (mysqli_query($conn, $sql)) {
            // Di chuyển file ảnh đã tải lên vào thư mục "img/product/"
            move_uploaded_file($image_tmp_name, '../view/img/product/' . $image);
            header("Location: index.php?act=manage-products");
            exit();
            echo "Thêm sản phẩm thành công!";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    }
    $qantity_of_product = count(getProducts());
    $qantity_of_coffee = count(getProductType(1));
    $qantity_of_tea = count(getProductType(2));
    $qantity_of_cake = count(getProductType(3));
    $conn -> close();
?>
