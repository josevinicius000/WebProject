<?php
include("protect.php");
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="<?php echo DIRPAGE.'lib/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo DIRPAGE.'lib/js/FullCalendar/main.min.css'; ?>">
</head>
<body>
    <div class="calendar"></div>
    <?php
        $object = new Classes\ClassTeste();
    ?>
    <script src="<?php echo DIRPAGE.'lib/js/FullCalendar/main.min.js'; ?>"></script>
    <script src="<?php echo DIRPAGE.'lib/js/javascript.js'; ?>"></script>
</body>
</html>