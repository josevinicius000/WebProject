<?php
include("protect.php");
include("config/config.php");
include(DIRREQ.'lib/html/header.php');

    switch($_GET['acess']){
        case 1:
            header('Location:' . DIRPAGE.'views/manager/index.php'); 
            break;
        case 2:
            header('Location:' . DIRPAGE.'views/user/index.php');
            break;
    }

?> 
<?php include(DIRREQ.'lib/html/footer.php');?>
