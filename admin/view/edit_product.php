
<?php
    $this_id = $_GET['this_id'];
    include "../model/edit_product.php";
    include "../controller/function.php";
    $row = getAllFeatureOfProduct($this_id);
?>

<h1>Sản phẩm: <?php echo $row['product_name']; ?></h1>
<form method="post" enctype="multipart/form-data">
    <p>Loại sản phẩm</p>
        <select name="ca_id" value="<?php echo $category_map[$row['ca_id']]; ?>">
            <option value="1" <?php if ($row['ca_id'] == 1) echo 'selected'; ?>>Caffe</option>
            <option value="2" <?php if ($row['ca_id'] == 2) echo 'selected'; ?>>Trà</option>
            <option value="3" <?php if ($row['ca_id'] == 3) echo 'selected'; ?>>Bánh</option>
        </select>
    <p>Tên sản phẩm</p>
    <input type="text" name = "product_name" value="<?php echo $row['product_name'];?>">
    <p>Hình ảnh</p>
    <span><img src="../view/img/product/<?php echo $row['img'];?>" alt="" width = "50px" height="50px"></span>
    <input type="file" name="img" >
    <p>Giá bán</p>
    <input type="text" name = "price" value="<?php echo $row['price'];?>">
    <button name= "btn"> Edit</button>
</form>
<button onclick="location.href='../controller/index.php?act=manage-products'">Trở về</button>