<?php
    include 'connect.php';
    $sql = "SELECT * FROM product WHERE product_id = '$this_id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    // Then, we press edit button.
    if(isset($_POST['btn'])){
        $ca_id = $_POST['ca_id'];
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $img = $_FILES['img']['name'];//only get photo name
        $img_tmp_name = $_FILES['img']['tmp_name']; // get path of photo
        if($img == NULL){
            $sql = "UPDATE product SET ca_id = '$ca_id', product_name ='$product_name', price = '$price' WHERE product_id = '$this_id' ";
        }else{
            $sql = "UPDATE product SET ca_id = '$ca_id', product_name ='$product_name', price = '$price', img = '$img' WHERE product_id = '$this_id' ";
        }
        if(mysqli_query($conn, $sql)){
            if($row['img'] != $img){
                move_uploaded_file($img_tmp_name, '../view/img/product/'.$img);
            }
            header('location: index.php?act=manage-products');
        }
        else{
            echo "sai";
        }
    
    }

?>


