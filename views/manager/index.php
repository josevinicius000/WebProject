<?php
include("../../protect.php");
include("../../config/config.php");
include(DIRREQ.'lib/html/header.php');
?>
    <div><a id="logoff" href="../../login_screen.php"><img src="<?php echo DIRPAGE.'./img/login.png' ?>" alt="" style="margin-top: 10px; width: 40px; height: 40px;"> </a> <h1>Bem Vindo(a) <?php echo $_SESSION['username'];?></h1></div>
    <div class="calendarManager"><div>
    
<?php include(DIRREQ.'lib/html/footer.php');?>