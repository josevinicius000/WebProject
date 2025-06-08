<?php
include("../../protect.php");
include("../../config/config.php");
include(DIRREQ.'lib/html/header.php');
$date = new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));
$idUser = $_SESSION['iduser'];
$userName = $_SESSION['username'];
?>
  <style>
        .addForm {
            background-color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;

        }
        #date, #time, #title, #room, #description, #horasReserva, #end{
            border-color:  rgba(128, 128, 128, 0.644);
            border-radius: 15px;
            outline: none;
            font-size: 15px;
        }
        img {
            margin-top: 10px;
            width: 40px;
            height: 40px;
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
    </style>
<div class="addForm">    
<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php?view=1'; ?>">
    <input type="hidden" name="idUser" id="idUser" value="<?php echo $idUser; ?>"><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i:s"); ?>"><br>
    Titulo da reserva: <input type="text" name="title" id="title" ><br>
    Sala desejada: <input type="text" name="room" id="room" ><br>
    Motivo: <input type="text" name="description" id="description"><br>
    Cor de destaque: <select name="color" id="color">
        <option value="">Selecione</option>
        <option value="limegreen">Verde</option>
        <option value="blue">Azul</option>
        <option value="red">Vermelho</option>
    </select><br>
    Aluno responsável: <input type="text" name="student" id="student" value="<?php echo $userName; ?>"><br>
    Até quando deseja utilizar a sala ? <input type="date" name="end" id="end" value=""><br>
    <input type="time" name="endTime" id="endTime" style="margin-top: 10px;" ><br>
    <input type="submit" value="Confirmar reserva" style="margin-top: 10px;">
    <a id="turnBack" href="./index.php"><img src="<?php echo DIRPAGE.'./img/back.png' ?>" alt="" > </a>
</form>
</div>

    
<?php include(DIRREQ.'lib/html/footer.php');?>
