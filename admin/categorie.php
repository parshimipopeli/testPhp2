<?php
$json = file_get_contents("../data/categorie.json");
$donneesJson = json_decode($json, true);

// supression avec button des categories
if (isset($_GET['delete'])) {
    unset($donneesJson[$_GET['delete'] - 1]);

    // reinjection du tableau dans json
    $donneesJson = json_encode($donneesJson);
    file_put_contents("../data/categorie.json", $donneesJson);
    header('LOCATION: categorie.php');


}
   // ajout de categories dans tableau json
if (isset($_POST['intitule'])) {
    $id = max(array_column($donneesJson, 'id'))+1;
    $newElement = [['id' => $id,'language' => $_POST['intitule'], 'description' => $_POST['description']]];
    $newDonneesJson = array_merge($donneesJson, $newElement);
    file_put_contents('../data/categorie.json', json_encode($newDonneesJson));
}


?>

<!doctype html>
<html lang="fr">
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
<?php require_once('../includes/define.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 menuAdmin">
            <h4 class="text-center">Admin</h4>
            <nav>
                <ul>
                    <a href="index.php">
                        <li>Index admin</li>
                    </a>
                    <a href="categorie.php">
                        <li>Liste categories</li>
                    </a>
                    <a href="../index.php">
                        <li>Retour index</li>
                    </a>
                </ul>
            </nav>
        </div>
        <div class="col-8">
            <div class="container">
                <h1 class="text-center">Liste catégories</h1>
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <?php
                    $json = file_get_contents("../data/categorie.json");
                    $donneesJson = json_decode($json, true);
                    //parcourir tableau json puis afficher les infos dans les <td></td>
                    foreach ($donneesJson as $category) {
                    ?>
                    <tbody>
                    <tr>
                        <td> <?= $category['id'] ?>
                        </td>
                        <td><?= $category['language'] ?></td>
                        <td>
                            <?= " <a href='categorieDEtail.php?id=" . $category['id'] . "'><button class='bg-success'>See</button></a>"; ?>
                        </td>
                        <td><?= "<a href='categorie.php?delete=" . $category['id'] . "' name='delete' ><button class='bg-danger'>delete</button></a>" ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Ajouter catégories
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="categorie.php" name="add" method="post">

                        <div class="modal-body">
                                <input type="text" name="intitule">Intitulé de la catégorie</input>
                                <input type="text" name="description">Déscription</input>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" method="POST" class="btn btn-primary">Save changes</button>

                        </div>
                        </form>

                    </div>
                </div>
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
<script src="../js/app.js"></script>
</body>
</html>