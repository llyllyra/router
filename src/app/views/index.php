<?php
error_reporting(-1);

require_once "class/Beverage.php";
require_once "class/Beer.php";
CONST BARNAME = "Le Warzone";


$beer = new Beer('duvel', 8,"blond", 3.5, 'froid');
$cola = new Beverage("noir", 2);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
<h1><?= BARNAME ?></h1>

<p><?= $beer->getInfo() ?></p>
<p><?= $beer->getAlcoholPercentage() ?>°</p>
<p><?= $beer->getColor() ?></p>
<p><?= $beer->getBarName(BARNAME) ?></p>
<p><?= Beverage::getBarName(BARNAME) ?></p>
<a href="../app/views/contact.php">Contact</a>
</body>
</html>