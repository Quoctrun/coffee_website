<?php include "../view/header.php"; ?>
    <?php
    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'product':
                include "../view/product.php";
                break;
            case 'sale':
                include "../view/sale.php";
                break;
            case 'sign_up':
                header('location: ../view/sign_up.php');
                break;
            case 'sign_in':
                header('location: ../view/sign_up.php');
                break;
            case 'notification':
                include "../view/notification-detail.php";
                break;
            case 'checkout':
                include "../view/checkout.php";
                break;
            case 'purchase_history':
                include "../view/purchase_history.php";
                break;
            case 'purchase_history_detail':
                include "../view/purchase_history-detail.php";
                break;  
            case 'product-detail':
                include "../view/product-detail.php";
                break;  
            default:
                include "../view/home.php";
                break;
        }
    }
    else{
        include "../view/home.php";
    }
        
    ?>
    <?php include "../view/footer.php"; ?>
    <script type="text/javascript" src="../view/js/script.js"></script>
</body>
</html>
