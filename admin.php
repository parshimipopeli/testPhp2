<?php
session_start();
require_once 'includes/define.php';
if($_SESSION['droit'] >= SUPER_ADMIN ){
    echo "<a href=''>superAdmin</a>";

}