<?php include ("classeExo2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$lavie=100;   
$perso1 = new personnage($lavie);
$perso1 -> stat ();




?>
<p></p>
</body>
</html>

<?php
    highlight_file(__FILE__)
?>