<?php
include("../../protect.php");
include("../../config/config.php");
include(DIRREQ.'lib/html/header.php');
$objEvents = new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);
$date = new \DateTime($events['start']);
$end = new \DateTime($events['end']);

if ($events['iduser'] == $_SESSION['iduser']){
    $disabled = '';
    $hidden = 'submit';
    $style = '';
} else {
    $disabled = 'disabled';
    $hidden = 'hidden';
    $style = 'pointer-events: none;';
}

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
        .turn {
            text-decoration: none;
        }
    </style>


<div class="editForm">
<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerEdit.php?view=1'; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>" ><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>" <?php echo $disabled ?>><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i:s"); ?>"<?php echo $disabled ?>><br>
    Titulo da reserva: <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>" <?php echo $disabled ?> ><br>
    Sala desejada: <input type="text" name="room" id="room" value="<?php echo $events['room']; ?>" <?php echo $disabled ?> ><br>
    Motivo: <input type="text" name="description" id="description" value="<?php echo $events['description']; ?>" <?php echo $disabled ?>><br>
    Cor de destaque: <select name="color" id="color" <?php echo $disabled ?>>
        <option value="<?php echo $events['color'];?>"><?php echo $events['color'];?></option>
        <option value="limegreen">Verde</option>
        <option value="blue">Azul</option>
        <option value="red">Vermelho</option>
    </select><br>
    Aluno responsável: <input type="text" name="student" id="student" value="<?php echo $events['student']; ?>" <?php echo $disabled ?> ><br>
    Fim da reserva: <input type="date" name="end" id="end" value="<?php echo $end->format("Y-m-d"); ?>" <?php echo $disabled ?>><br>
    <input type="time" name="endTime" id="endTime" style="margin-top: 10px;" value="<?php echo $end->format("H:i:s"); ?>" <?php echo $disabled ?> ><br>
    <input type="<?php echo $hidden ?>" value="Confirmar reserva" style="margin-top: 10px;">
    <a id="delete" href="<?php echo DIRPAGE.'controllers/ControllerDelete.php?id='. $_GET['id'] .'&view=1'; ?>" style="<?php echo $style ?>"><img src="<?php echo DIRPAGE.'./img/delete_icon.png' ?>" alt="" > </a>
    <a id="turnBack" href="./index.php"><img src="<?php echo DIRPAGE.'./img/back.png' ?>" alt="" > </a>
</form>
</div>
    
<?php include(DIRREQ.'lib/html/footer.php');?>