<html>

<head>
<link rel="stylesheet" href="exo1.css">
    <?php include("classeExo1.php");?>
</head>

<body>

    <?php 
 $Objetuser = new user("chloé");
 $Objetuser->AfficherUser( );


?>
    <table class="table"
    border=1>
    <tr>
   <td class="user">user</td>
    </tr>
        <tr>
            <td>
                <p>Nom:string</p>
                <p>Prenom: string</p>
            </td>
        
            
        </tr>
        <tr>

            <td class="affiche">+AfficherUser(): void</td>

        </tr>
    </table>
</body>

</html>
<?php
    highlight_file(__FILE__)
?>