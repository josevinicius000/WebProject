<?php
namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect 
{
    // Traz os dados das reservas do banco
    public function getEvents()
    {
        $before = $this->conectDB()->prepare("select * from reservations");
        $before->execute();
        $response = $before->fetchAll(\PDO::FETCH_ASSOC); 
        
        return json_encode($response);
    }

    public function createEvent($id=0, $title, $description, $color, $start, $end, $room, $student, $idUser,$view)
    {
        $before =  $this->conectDB()->prepare("insert into reservations values (?,?,?,?,?,?,?,?,?)");
        $before->bindParam(1, $id, \PDO::PARAM_INT);
        $before->bindParam(2, $title, \PDO::PARAM_STR);
        $before->bindParam(3, $description, \PDO::PARAM_STR);
        $before->bindParam(4, $color, \PDO::PARAM_STR);
        $before->bindParam(5, $start, \PDO::PARAM_STR);
        $before->bindParam(6, $end, \PDO::PARAM_STR);
        $before->bindParam(7, $room, \PDO::PARAM_STR);
        $before->bindParam(8, $student, \PDO::PARAM_STR);
        $before->bindParam(9, $idUser, \PDO::PARAM_STR);
        $before->execute();

        if ($view == 1){
            header('Location: ../views/user/index.php');
        } else {
            header('Location: ../views/manager/index.php');
        }
    }

    public function updateEvent($id,$title,$description,$color,$start,$end,$room,$student,$view)
    {
        $before = $this->conectDB()->prepare("update reservations set title=?, description=?, color=?, start=?, end=?, room=?, student=? where id=?");
        $before->bindParam(1, $title, \PDO::PARAM_STR);
        $before->bindParam(2, $description, \PDO::PARAM_STR);
        $before->bindParam(3, $color, \PDO::PARAM_STR);
        $before->bindParam(4, $start, \PDO::PARAM_STR);
        $before->bindParam(5, $end, \PDO::PARAM_STR);
        $before->bindParam(6, $room, \PDO::PARAM_STR);
        $before->bindParam(7, $student, \PDO::PARAM_STR);
        $before->bindParam(8, $id, \PDO::PARAM_STR);
        $before->execute();

        if ($view == 1){
            header('Location: ../views/user/index.php');
        } else {
            header('Location: ../views/manager/index.php');
        }
        
    }

    public function deleteEvent($id,$view)
    {
        $before = $this->conectDB()->prepare("delete from reservations where id=?");
        $before->bindParam(1, $id, \PDO::PARAM_INT);
        $before->execute();

        if ($view == 1){
            header('Location: ../views/user/index.php');
        } else {
            header('Location: ../views/manager/index.php');
        }
        
    }

    public function getEventsById($id)
    {
        $before = $this->conectDB()->prepare("select * from reservations where id=?");
        $before->bindParam(1, $id, \PDO::PARAM_INT);
        $before->execute();

        $response = $before->fetch(\PDO::FETCH_ASSOC);

        return $response; 
    }

    public function createUser($id=0, $username, $cpf, $password, $course, $acess)
    {
        $before =  $this->conectDB()->prepare("insert into users values (?,?,?,?,?,?)");
        $before->bindParam(1, $id, \PDO::PARAM_INT);
        $before->bindParam(2, $username, \PDO::PARAM_STR);
        $before->bindParam(3, $cpf, \PDO::PARAM_STR);
        $before->bindParam(4, $password, \PDO::PARAM_STR);
        $before->bindParam(5, $course, \PDO::PARAM_STR);
        $before->bindParam(6, $acess, \PDO::PARAM_STR);
        $before->execute();

        header('Location: ../login_screen.php');
    }
}