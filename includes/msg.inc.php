<?php
	if (isset($_GET['error'])) {
		if ($_GET['error'] == "emptyfields") {
            echo '<p class="signup-error">Fields cannot be left empty</p>';
        }
        else if ($_GET['error'] == "sqlerror") {
            echo '<p class="signup-error">Oops! looks like there was a problem connecting to the database</p>';
        }
        else if ($_GET['error'] == "invaliduid") {
            echo '<p class="signup-error">Please use the correct format for username. Try again without using any special characters</p>';
        }
        else if ($_GET['error'] == "passwordcheck") {
            echo '<p class="signup-error">Passwords did not match</p>';
        }
        else if ($_GET['error'] == "usertaken") {
            echo '<p class="signup-error">This user has already been registered in the database</p>';
        }
    }
    else if (isset($_GET['registration'])) {
        if ($_GET['registration'] == "success") {
            echo '<p class="success">The user was registered successfully</p>';
        }
    }
?>