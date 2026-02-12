<?php

if (!function_exists('protect')) {

    function protect($level = 1) {

        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == null) {
            header("Location: ../login.php");
            exit();
        }

    }

}
