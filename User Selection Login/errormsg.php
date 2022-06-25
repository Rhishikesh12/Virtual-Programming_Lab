<?php
	if (isset($_GET['error'])) {
		if ($_GET['error'] == "emptyfields") {
            echo '<p class="signup-error">Please fill in all the fields</p>';
        }
        else if ($_GET['error'] == "sqlerror") {
            echo '<p class="signup-error">Please fill in all the fields</p>';
        }
        else if ($_GET['error'] == "wrongpwd") {
            echo '<p class="signup-error">Username and password did not match. Please try again</p>';
        }
        else if ($_GET['error'] == "nouser") {
            echo '<p class="signup-error">User not found</p>';
        }
    }
?>