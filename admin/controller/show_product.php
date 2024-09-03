<?php
    include "../model/connect.php";
    include "function.php";
    
    if (isset($_GET['this_id'])) {
        showProduct($_GET['this_id']);
        header('location: ../view/manage-products.php');
    }
    
?>