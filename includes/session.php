<?php
require_once 'includes/define.php';
session_start();
if (!isset($_SESSION['name'])) {
    header('LOCATION: login.php');
} else {


    if (isset($_POST['deconnection'])) {

        session_destroy();
        header('LOCATION: login.php');

    }
    ?>