<?php
require_once('../includes/define.php');


?>
!<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/appAdmin.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-2 menuAdmin">
            <h4 class="text-center">Admin</h4>
            <nav>
                <ul>
                    <a href="index.php"><li>Index admin</li></a>

                    <a href="categorie.php"><li>Liste categories</li></a>
                    <a href="../index.php"><li>Retour index</li></a>


                </ul>
            </nav>
        </div>
        <div class="col-8">
            <div class="container">
                <h1 class="text-center">Détail catégorie</h1>
                <table class="table table-dark table-striped">

                    <thead>
                    <tr>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <?php
                    $json = file_get_contents("../data/categorie.json");
                    $donneesJson = json_decode($json, true);
                    foreach ($donneesJson as $val) {
                    if ($val['id'] == $_GET['id']){


                    ?>

                    <tbody>
                    <tr>
                        <td> <?= $val['description'];?>
                        </td>

                    </tr>
                    <?php }
                    } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>


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
