<?php
if (isset($_POST['signin-submit'])) {  
    require './connect.inc.php';

    $mailaname = $_POST['name'];
    $pass = $_POST['pass'];

    if(empty($mailaname) || empty($pass)){
        header("Location: ./login.php?error=emptyFields&name=".$username);
        exit();
    } 
    else{
        $sql = "SELECT * FROM users WHERE uidUser =? OR emailUser =?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ./login.php?error=sqlError");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$mailaname,$mailaname);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result) ){
                $passCheck = password_verify($password, $row['passUser']);
                if($passCheck == false){
                    header("Location: ./login.php?error=wrongPassword");
                    exit();
                }
                else if($passCheck == true){
                    session_start();
                    $_SESSION['userID'] = $row['idUser']; 
                    $_SESSION['userUID'] = $row['uidUser']; 
                    header("Location: ./home.php?login=success");
                    exit();
                }
                else{
                    header("Location: ./login.php?error=wrongPassword");
                    exit();
                }
            }
            else{
                header("Location: ./login.php?error=noUser");
                exit();
            }
        }
    }
    

}
else {
    header('Location: ./login.php');
    exit();
}