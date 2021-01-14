
<?php include ("classeExo4.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  
$perso1 = new Personnage3(100 , "biden");
$perso2 = new Personnage3(100 , "trump");

$perso1 -> stat ();
 
$perso1-> massacrer($perso2);




?>
</body>
</html>
<?php
    highlight_file(__FILE__)
?>