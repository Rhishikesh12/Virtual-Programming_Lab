<?php

if (isset($_POST['adminlogin-submit'])) {

    require 'dbh.inc.php';

    $userid = $_POST['auid'];
    $password = $_POST['apwd'];

    if (empty($userid) || empty($password)) {
        header("Location: ../User Selection Login/login.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM admins WHERE adminName=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../User Selection Login/login.php?error=sqlerror");
            exit();
        }
        else {

            mysqli_stmt_bind_param($stmt, "s", $userid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['adminPass']);
                if ($pwdCheck == false) {
                    header("Location: ../User Selection Login/login.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userid'] = $row['adminid'];
                    $_SESSION['username'] = $row['adminName'];

                    header("Location: ../Admin Index/admin.php?user=".$userid);
                    exit();
                }
                else {
                    header("Location: ../User Selection Login/login.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../User Selection Login/login.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../User Selection Login/login.php");
    exit();
}