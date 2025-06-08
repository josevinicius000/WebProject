<?php
include("../config/config.php");
$objEvents =  new \Classes\ClassEvents();
$view = $_GET['view'];
$date = filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$time = filter_input(INPUT_POST,'time',FILTER_DEFAULT);
$title = filter_input(INPUT_POST,'title',FILTER_DEFAULT);
$room = filter_input(INPUT_POST,'room',FILTER_DEFAULT);
$description = filter_input(INPUT_POST,'description',FILTER_DEFAULT);
$start = new \DateTime($date . ' '. $time, new \DateTimeZone('America/Sao_Paulo'));
$endDate = filter_input(INPUT_POST,'end',FILTER_DEFAULT);
$endTime = filter_input(INPUT_POST,'endTime',FILTER_DEFAULT);
$color = filter_input(INPUT_POST,'color',FILTER_DEFAULT);
$end =  new \DateTime($endDate.' '. $endTime, new \DateTimeZone('America/Sao_Paulo'));
$student = filter_input(INPUT_POST,'student',FILTER_DEFAULT);
$idUser = filter_input(INPUT_POST,'idUser',FILTER_DEFAULT);
$objEvents->createEvent(
    0,
    $title,
    $description,
    $color,
    $start->format("Y-m-d H:i:s"),
    $end->format("Y-m-d H:i:s"),
    $room,
    $student,
    $idUser,
    $view
);