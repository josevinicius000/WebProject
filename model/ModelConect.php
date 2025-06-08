<?php
namespace Models;

abstract class ModelConect
{
    protected function conectDB()
    {
        try{
            $con =  new \PDO("mysql:host=".HOST.";dbname=".DB.";charset=utf8",USER,PASS);
            return $con;
        } catch (\PDOException $error){
            return $error->getMessage();
        }
    }
}