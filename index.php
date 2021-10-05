<?php


if (!empty($_GET["action"])):
    switch ($_GET["action"]):
        case "accueilView":
            include 'controllers/accueilController.php';
            break;
        case "productView":
            include 'controllers/productController.php';
            break;
        case "singleProductView":
            include 'controllers/singleProductController.php';
            break;
        default:
            include 'services/page404.php';
    endswitch;
endif;


