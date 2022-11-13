<?php
    include ('view/header.php');

    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'about':
                include 'view/gioithieu.php';
                break;
            case 'contact':
                include 'view/lienhe.php';
                break;
           
            default:
              include 'view/home.php';
                break;
        }
    }else{      
        include ('view/home.php');
    }

    include ('view/footer.php');

?>