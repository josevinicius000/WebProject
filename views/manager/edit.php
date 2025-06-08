<?php
include("../../protect.php");
include("../../config/config.php");
include(DIRREQ.'lib/html/header.php');
$objEvents = new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);
$date = new \DateTime($events['start']);
$endDate = new \DateTime($events['end']);
?>
<style>
        .editForm {
            background-color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;

        }
        #date, #time, #title, #room, #description, #end{
            border-color:  rgba(128, 128, 128, 0.644);
            border-radius: 15px;
            outline: none;
            font-size: 15px;
        }
        input, select{
            background-color: blue;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            padding: 15px;
            width: 100%;
        }
        input:hover{
            background-color: darkblue;
        }
        img {
            margin-top: 10px;
            width: 40px;
            height: 40px;
        }
        .delete {
            text-decoration: none;
        }
    </style>


<div class="editForm">
<form name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'controllers/ControllerEdit.php?view=0'; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i:s"); ?>"><br>
    Titulo da reserva: <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
    Sala desejada: <input type="text" name="room" id="room" value="<?php echo $events['room']; ?>"><br>
    Motivo: <input type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>
    Cor de destaque: <select name="color" id="color">
        <option value="<?php echo $events['color'];?>"><?php echo $events['color'];?></option>
        <option value="limegreen">Verde</option>
        <option value="blue">Azul</option>
        <option value="red">Vermelho</option>
    </select><br>
    Aluno responsável: <input type="text" name="student" id="student" value="<?php echo $events['student']; ?>"><br>
    Até quando deseja utilizar a sala ? <input type="date" name="end" id="end" value="<?php echo $endDate->format("Y-m-d"); ?>"><br>
    <input type="time" name="endTime" id="endTime" style="margin-top: 10px;"  value="<?php echo $endDate->format("H:i:s"); ?>"><br>
    <input type="submit" id="confirm" value="Confirmar reserva" style="margin-top: 10px;">
</form>
<a id="delete" href="<?php echo DIRPAGE.'controllers/ControllerDelete.php?id='. $_GET['id'] .'&view=0'; ?>"><img src="<?php echo DIRPAGE.'./img/delete_icon.png' ?>" alt=""> </a>
<a id="turnBack" href="./index.php"><img src="<?php echo DIRPAGE.'./img/back.png' ?>" alt="" style="margin-left: 5px;"> </a>
</div>
<?php include(DIRREQ.'lib/html/footer.php');?>
