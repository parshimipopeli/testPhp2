<?php
require_once 'includes/define.php';
session_start();
if (!isset($_SESSION['name'])) {
    header('LOCATION: login.php');
} else {
if (isset($_SESSION['name'])) {
    echo 'Bonjour ' . $_SESSION['name'];
}

if (isset($_POST['deconnection'])) {

    session_destroy();
    header('LOCATION: login.php');

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
if ($_SESSION['droit'] >= ADMIN ){
    echo "<a href='admin.php'>admin</a>";
}
?>
<form action="" method="POST">
        <button name="deconnection">Déconnexion</button>
    </form>


    <?php

    $json = file_get_contents("data/categorie.json");
    $donneesJson = json_decode($json, true);


    foreach ($donneesJson as $category) {
//        echo "<a href='categorie.php?categorie=" . $category['id'] . "'>" . $category['language'] . "</a><br>";
        echo  "<div class=\"card-columns\">
  <div class=\"card bg-primary text-center\">
    <div class=\"card-body text-center\">
      <p class=\"card-text\">". "<a class=\"text-white\" href='categorie.php?categorie=" . $category['id'] . "'>" . $category['language'] . "</a> </p>
    </div>
  </div>
</div>";
    }

    ?>


    <div id="categories"></div>
    <?php
}
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</body>
</html>