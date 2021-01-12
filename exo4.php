
<?php include ("classeExo3.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $lavie=50;
$perso1 = new Personnage3($lavie,"julien");
$perso2 = new Personnage3("maurice");

$perso1 -> stat ();




?>
</body>
</html>
<?php
    highlight_file(__FILE__)
?>