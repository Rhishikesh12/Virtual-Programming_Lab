<?php
if (isset($_POST['student-register-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../Admin Index/addstudent.php?error=emptyfields&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../Admin Index/addstudent.php?error=invaliduid");
        exit();
    }
    else if ($password !== $passwordRepeat) {
        header("Location: ../Admin Index/addstudent.php?error=passwordcheck&uid=".$username);
        exit();
    }
    else {

        $sql = "SELECT stdName FROM students WHERE stdName=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Admin Index/addstudent.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../Admin Index/addstudent.php?error=usertaken");
                exit();
            }
            else {

                $sql1 ="INSERT INTO students (stdName, stdPass) VALUES (?, ?);";
                $sql2 ="CREATE TABLE `$username` (
                    expid int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
                    expName TINYTEXT NOT NULL,
                    expCode LONGTEXT NOT NULL,
                    expInput LONGTEXT NOT NULL,
                    expOutput LONGTEXT NOT NULL
                    );";        
                $stmt1 = mysqli_stmt_init($conn);
                $stmt2 = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                    header("Location: ../Admin Index/addstudent.php?error=sqlerror");
                    exit();
                }
                else if (!mysqli_stmt_prepare($stmt2, $sql2)) {
                    header("Location: ../Admin Index/addstudent.php?error=sqlerror2");
                    exit();
                }
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt1, "ss", $username, $hashedPwd);
                    mysqli_stmt_execute($stmt1);
                    mysqli_stmt_bind_param($stmt2, "s", $username);
                    mysqli_stmt_execute($stmt2);
                    header("Location: ../Admin Index/addstudent.php?registration=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../Admin Index/addstudent.php");
    exit();
}