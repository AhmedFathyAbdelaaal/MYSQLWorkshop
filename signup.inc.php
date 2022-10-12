<?php

if (isset($_POST['signup-submit'])) {  
    require './connect.inc.php';

    $username = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passrepeat = $_POST['pass-repeat'];

    if(empty($username) || empty($email) || empty($pass) || empty($passrepeat)){
        header("Location: ./register.php?error=emptyFields&name=".$username."&email=".$email);
        exit();
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/" , $username)){
        header("Location: ./register.php?error=invalidMailAndName");
        exit();
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ./register.php?error=invalidMail&name=".$username);
        exit();
    } 
    else if (!preg_match("/^[a-zA-Z0-9]*$/" , $username)){
        header("Location: ./register.php?error=invalidUsername&email=".$email);
        exit();
    }
    else if ($pass !== $passrepeat){
        header("Location: ./register.php?error=passwordCheck&name=".$username."&email=".$email);
        exit();
    }
    else{

        $sql = "SELECT uidUser FROM users WHERE uidUser =?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ./register.php?error=sqlError");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck>0){
                header("Location: ./register.php?error=usernameTaken&email=".$email);
                exit();
            }
            else{  //sign user into website 
                $sql = "INSERT INTO users (uidUser,emailUser,passUser) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ./register.php?error=sqlError");
                    exit();
                }
                else{
                    $hashedpass = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedpass);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location: ./register.php?signup=success");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else{
    header("Location: ./register.php");
    exit();
}