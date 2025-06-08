<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$view = $_GET['view'];
$id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);
$objEvents->deleteEvent($id,$view);