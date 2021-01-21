

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    include("classeExo5.php");
  
    $bdd = new PDO("mysql:dbname=lea_objet_exo5;host=localhost", "root", "root");
    $perso1 = new Personnage4($bdd, 3);

    $perso2 = new Personnage4($bdd, 4);

$perso1 -> stat ();

$perso2 -> stat ();





?>
</body>
</html>
<?php
    highlight_file(__FILE__)
?>