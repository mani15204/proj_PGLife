<?php

    function emptyInputSignup($name, $no, $email, $passwd, $clgname, $gender){
        if(empty($name) || empty($no) || empty($email) || empty($passwd) || empty($clgname) || empty($gender)){
            return true;
        }
        return false;
    }

    function invalidName($name){
        if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
            return true;
        }
        return false;
    }

    function invalidEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    function nameExists($conn, $name, $email){
        $sql = "SELECT * FROM users WHERE name = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "<script>window.history.back();</script>";
        }
        mysqli_stmt_bind_param($stmt, "ss", $name, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            return false;
        }
    }

    function createUser($conn, $name, $no, $email, $passwd, $clgname, $gender){
        $sql = "INSERT INTO users VALUES(?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "<script>window.history.back();</script>";
        }


        $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sissss", $name, $no, $email, $hashedPwd, $clgname, $gender);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../index.php");
        exit();
    }

    function emptyInputLogin($name, $passwd){
        if(empty($name) || empty($passwd)){
            return true;
        }
        return false;
    }

    function loginUser($conn, $name, $passwd){
        $uidExists = nameExists($conn, $name, $name);
        if($uidExists === false){
            echo "<script>alert('Name or Email doesn\'t exist!');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        }

        $pwdHashed = $uidExists['passwd'];
        $checkPasswd = password_verify($passwd, $pwdHashed);
        if($checkPasswd === false){
            echo "<script>alert('Wrong credentials!');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        }
        else if($checkPasswd === true){
            session_start();
            $_SESSION['name'] = $uidExists['name'];
            $_SESSION['email'] = $uidExists['email'];
            $_SESSION['no'] = $uidExists['no'];
            $_SESSION['clgname'] = $uidExists['clgname'];
            $_SESSION['gender'] = $uidExists['gender'];
            return true;
            exit();
        }

    }

    ?>