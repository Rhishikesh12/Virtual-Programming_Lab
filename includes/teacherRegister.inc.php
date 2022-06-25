<?php
if (isset($_POST['teacher-register-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../Admin Index/addteacher.php?error=emptyfields&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../Admin Index/addteacher.php?error=invaliduid");
        exit();
    }
    else if ($password !== $passwordRepeat) {
        header("Location: ../Admin Index/addteacher.php?error=passwordcheck&uid=".$username);
        exit();
    }
    else {

        $sql = "SELECT teacherName FROM teachers WHERE teacherName=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Admin Index/addteacher.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../Admin Index/addteacher.php?error=usertaken");
                exit();
            }
            else {

                $sql ="INSERT INTO teachers (teacherName, teacherPass) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../Admin Index/addteacher.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../Admin Index/addteacher.php?registration=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../Admin Index/addteacher.php");
    exit();
}