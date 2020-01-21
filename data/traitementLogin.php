<?php
$json = file_get_contents("users.json");
    $passhash =  password_hash('lam62122phil', PASSWORD_DEFAULT);

if (isset($_POST['submit'])) {
    $mail = HTML_SPECIALCHARS($_post['email']);
    $pwd = HTML_SPECIALCHARS($_POST['password']);
    $passOk = password_verify($_POST['pass'], $passHash);

 if (!$passOk) {
       header('LOCATION: ../login.php');

}else{
    session_start();
}

}





?>