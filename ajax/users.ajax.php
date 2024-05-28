<?php

require_once '../db_conexion.php';

if(isset($_POST['form_rg'])){

    if(!empty($_POST['user_name']) && !empty($_POST['email']) && !empty($_POST['password'])){

        if(!preg_match('/^[a-zA-Z0-9]$/', $_POST['user_name'])){
            echo "user_invalido";
            exit();    

        }elseif(!preg_match('/^([\da-z_\.-]+)@([\da-z_\.-]+)\.([a-z\.]{2,6})$/', $_POST['email'])){

            echo "email_invalido";
            exit();

        }elseif(!preg_match('/^[a-zA-Z0-9]+$/', $_POST['password'])){

            echo "pass_invalido";
            exit();  

        }

        $user_name = trim($_POST['user_name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $description = "";
        $picture = "";
        $banner = "";
        $status = 0;
        $token = "";

        $stmt = $conn -> prepare("INSERT INTO `ud_users`(`user_name`, `email`, `password`, `description`, `picture`, `banner`, `status`, `token`) VALUES (?,?,?,?,?,?,?,?)");
        $stmt -> bind_param('ssssssis', $user_name, $email, $password, $description, $picture, $banner, $status, $token);

        if($stmt -> execute()){
            echo "ok";
        }else{
            echo "error";
        }




    }else{
        echo "vacio";
    }
}