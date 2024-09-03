
    <?php include "../view/header.php"; 

    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'manage-products':
                include "../view/manage-products.php";
                break;
            case 'manage-orders':
                include "../view/manage-orders.php";
                break;
            case 'manage-accounts':
                include "../view/manage-accounts.php";
                break;
            case 'manage-sales':
                include "../view/manage-sales.php";
                break;
            case 'manage-notification':
                include "../view/manage-notification.php";
                break;
            default:
                include "../view/index.php";
                break;
        }
    }
    else{
        include "../view/index.php";
    }
        
    include "../view/footer.php";
    ?>
