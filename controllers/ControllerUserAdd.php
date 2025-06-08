<?php
include("../config/config.php");
$objEvents =  new \Classes\ClassEvents();
$username = filter_input(INPUT_POST,'newName',FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST,'newCpf',FILTER_DEFAULT);
$course = filter_input(INPUT_POST,'course',FILTER_DEFAULT);
$acess = filter_input(INPUT_POST,'acessType',FILTER_DEFAULT);
$password = filter_input(INPUT_POST,'newPassword',FILTER_DEFAULT);
$objEvents->createUser(
    0,
    $username,
    $cpf,
    $password,
    $course,
    $acess
);