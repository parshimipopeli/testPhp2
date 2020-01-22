<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 
session_start();
if (!isset($_SESSION['name'])) {
    header('LOCATION: login.php');
}else{
if (isset($_SESSION['name'])) {
    echo 'Bonjour ' . $_SESSION['name'];
}
if (isset($_POST['deconnection'])){

    session_destroy();
    header('LOCATION: login.php');

}
?>
<form action="" method="POST">
    <button name="deconnection">Déconnexion</button>
</form>
<section id="main">
            <div id="menu-sm">
                <div class="container-fluid">
                    <div class="row ml-0 mr-0 pl-0 pr-0">
                        <div class="col-lg-8 offset-lg-2 bg-menu-btn pl-0 pr-0">
                            <div class="row ml-0 mr-0 pl-0 pr-0 justify-content-between position-static">
                                <button type="button" id="mega-btn1"
                                    class="btn btn-primary shadow-sm col-4 ml-0 mr-0 pl-0 pr-0">PC &
                                    Ordinateurs</button>
                                <button type="button" id="mega-btn2"
                                    class="btn btn-primary shadow-sm col-4  ml-0 mr-0 pl-0 pr-0">Composant
                                    PC</button>
                                <button type="button" id="mega-btn3"
                                    class="btn btn-primary shadow-sm col-4  ml-0 mr-0 pl-0 pr-0">Périphérique
                                    PC</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mega-menu1" class="container-fluid position-absolute">
                    <div class="row ml-0 mr-0 pl-0 pr-0">
                        <div class="col-lg-8 offset-lg-2 bg-menu">
                            <div class="row ">
                                <div class="col-6 align-self-center ">
                                    <!-- <div class="row"> -->
                                        <ul class="mega-menu-ul align-middle pl-3">
                                            <li><a id="categ1" href="category.html">Ordinateur / PC Fixe</a></li>
                                            <li><a id="categ2" href="category.html">Ordinateur portable</a></li>
                                            <li><a id="categ3" href="category.html">Tablette tactile</a></li>
                                            <li><a id="categ4" href="category.html">OS & Logiciels</a></li>
                                        </ul>
                                    <!-- </div> -->
                                </div>
                                <div class="col-6 text-center">
                                    <img class="img-fluid menu-img" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>














<?php

}
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>