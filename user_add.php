<?php
include("protect.php");
include("config/config.php");
include(DIRREQ.'lib/html/header.php');
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
    </style>
<div class="addForm">    
<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerUserAdd.php'; ?>">
<h1>Cadastro de usuário</h1>
    Nome: <input type="text" name="newName" id="newName"><br>
    CPF: <input type="text" name="newCpf" id="newCpf"><br>
    Curso: <input type="text" name="course" id="course" ><br>
    Tipo de acesso:  <select name="acessType" id="acessType">
        <option value="">Selecione</option>
        <option value="1">Manager</option>
        <option value="2">User</option>
    </select><br>
    Digite sua senha: <input type="password" name="newPassword" id="newPassword" ><br>
    <input type="submit" value="Confirmar cadastro" style="margin-top: 10px;">
    <a id="turnBack" href="./login_screen.php"><img src="<?php echo DIRPAGE.'./img/back.png' ?>" alt="" > </a>
</form>
</div>

    
<?php include(DIRREQ.'lib/html/footer.php');?>