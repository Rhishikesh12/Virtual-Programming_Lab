<?php

require 'dbh.inc.php';

if (isset($_GET['from'])) {
    if ($_GET['from'] == "students") {

        $username = $_GET['username'];
        $id = $_GET['id'];

        $sql1 = "DELETE FROM students WHERE stdid='$id';";
        $sql2 ="DROP TABLE `$username`";

        $stmt1 = mysqli_stmt_init($conn);
        $stmt2 = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt1, $sql1)) {
            header("Location: ../Admin Index/viewstudent.php?error=sqlerror1");
            exit();
        }
        else if (!mysqli_stmt_prepare($stmt2, $sql2)) {
            header("Location: ../Admin Index/viewstudent.php?error=sqlerror2");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt1, "i", $id);
            mysqli_stmt_execute($stmt1);
            mysqli_stmt_bind_param($stmt2, "s", $username);
            mysqli_stmt_execute($stmt2);
            header("Location: ../Admin Index/viewstudent.php?delete=success");
            exit();
        }
    }
    else if ($_GET['from'] == "teachers") {
        
        $username = $_GET['username'];
        $id = $_GET['id'];

        $sql1 = "DELETE FROM teachers WHERE teacherid='$id';";

        $stmt1 = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt1, $sql1)) {
            header("Location: ../Admin Index/viewteacher.php?error=sqlerror1");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt1, "i", $id);
            mysqli_stmt_execute($stmt1);
            header("Location: ../Admin Index/viewteacher.php?delete=success");
            exit();
        }
    }
    else if ($_GET['from'] == "admins") {
        
        $username = $_GET['username'];
        $id = $_GET['id'];

        $sql1 = "DELETE FROM admins WHERE adminid='$id';";

        $stmt1 = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt1, $sql1)) {
            header("Location: ../Admin Index/viewadmin.php?error=sqlerror1");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt1, "i", $id);
            mysqli_stmt_execute($stmt1);
            header("Location: ../Admin Index/viewadmin.php?delete=success");
            exit();
        }
    }
}