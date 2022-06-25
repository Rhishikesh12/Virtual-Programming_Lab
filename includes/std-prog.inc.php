<?php
if (isset($_POST['exp-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $expname = $_POST['expid'];
    $code = $_POST['code'];
    $input = $_POST['input'];
    $output = $_POST['output'];

        $sql = "SELECT stdName FROM students WHERE stdName=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Online-Compiler-Windows-Server-master/javaConsole.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if (!$resultCheck > 0) {
                header("Location: ../Online-Compiler-Windows-Server-master/javaConsole.php?error=usernotexist");
                exit();
            }
            else {

                $sql1 ="INSERT INTO `$username` (expName, expCode, expInput, expOutput) VALUES (?, ?, ?, ?);";
                // $sql2 ="CREATE TABLE `$username` (
                //     expid int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
                //     expName TINYTEXT NOT NULL,
                //     expData LONGTEXT NOT NULL,
                //     expAsmt LONGTEXT NOT NULL
                //     );";        
                
                $stmt1 = mysqli_stmt_init($conn);

                // $stmt2 = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                    header("Location: ../Online-Compiler-Windows-Server-master/javaConsole.php?error=sqlerror");
                    exit();
                }

                // else if (!mysqli_stmt_prepare($stmt2, $sql2)) {
                //     header("Location: ../Admin Index/addstudent.php?error=sqlerror2");
                //     exit();
                // }
                
                else {

                    mysqli_stmt_bind_param($stmt1, "ssss", $expname, $code, $input, $output);
                    mysqli_stmt_execute($stmt1);
                    header("Location: ../Online-Compiler-Windows-Server-master/javaConsole.php?storage=success");
                    exit();
                }
            }
        }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../Online-Compiler-Windows-Server-master/javaConsole.php");
    exit();
}