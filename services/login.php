<?php
include '../services/connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$password = md5($password);

$stmt=$pdo->prepare("SELECT * FROM `usuarios` WHERE contra_usu=? and correo_usu=?");
$stmt->bindParam(1, $password);
$stmt->bindParam(2, $username);


$stmt->execute();

$num=$stmt->fetchAll(PDO::FETCH_ASSOC);
$num=count($num);

try {
    if ($num==1)
    {
        session_start();
        $_SESSION['email']=$username;
        //header("Location:../View/login.php");
    }
}catch(PDOException $e){
    header("Location:../View/login.php");
 }

