<?php 
    include "connect.php"; 
    
    $category_map = [
        1 => 'Caffee',
        2 => 'Trà',
        3 => 'Bánh'
    ];


    $sql = "SELECT * FROM product WHERE 1=1";
    $sql .= " ORDER BY product_id";

    $products = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>



