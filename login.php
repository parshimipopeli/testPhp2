<?php
session_start();
//$mail = htmlspecialchars($_POST['email']);
//$pwd = htmlspecialchars($_POST['pwd']);
if (isset($_POST['login'])) {

    if (isset($_POST['email']) && isset($_POST['pwd'])) {

        $json = file_get_contents("data/users.json");
        $donneesJson = json_decode($json, true);
        $email = false;
        foreach ($donneesJson as $key => $users) {
            if ($_POST['email'] == $users['email']){
                $email = true;
                if (password_verify($_POST['pwd'], $users['password'])){
                    $_SESSION['name'] = $users['firstName'];
                    header('Location: index.php');
                }else{
                    echo 'votre mot de passe n\' est pas valide';
                }
            }
        }
    }
    if (!$email) {
        echo 'email invalide';
    }


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST"  action="">
    <input class="form-control" type="email" name="email" placeholder="entrez votre email">
    <input class="form-control" type="password" name="pwd" placeholder="entrez votre mot de passe">
    <button type="submit" name="login" class="btn btn-primary">entrez</button>
</form>
</body>
</html>





