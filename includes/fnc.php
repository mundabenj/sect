<?php

function checkUserLoggedIn() {

    // Check if the user is logged in
    if (!isset($_SESSION['consort'])) {
        header("Location: signin.php?error=not_logged_in");
        exit;
    }

    }
