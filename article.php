<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
require_once ('includes/define.php');

$json = file_get_contents("data/detailArticle.json");
$donneesJson = json_decode($json, true);
foreach ($donneesJson as $detailArticle) {
    if ($detailArticle['id'] == $_GET['article']){
        echo  "<div class=\"card-columns\">
  <div class=\"card bg-primary text-center\">
    <div class=\"card-body text-center\">
      <p class=\"card-text\">". $detailArticle['article'] ."</p>
    </div>
  </div>
</div>";
    }
}
?>
</body>
</html>