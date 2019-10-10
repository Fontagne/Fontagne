<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>Exercice 6 PHP</title>
    </head>
    <body>
    <?php 
        
        if (isset($_GET['LeChiffre']) && !empty($_GET['LeChiffre'])){    
            echo "Ma valeur est :",$_GET['LeChiffre'];
        }else{
            echo "Formulaire non saisie";
            ?>
            <form method="get" action="action.exo6.php">
            <form action="exo6.php" method="GET">
                <label>Mettre un chiffre</label>
                
                <input type="text" name="LeChiffre" />
                
                <input type="submit" name="Valider" value="Cliquer pour valider" />
            </form>
           <?php
        } 
          ?> 
    </body>        
</html>
<a href="http://192.168.65.195/Fontagne">Retour menu</a>

<xmp>
php 
        
        if (isset($_GET['LeChiffre']) && !empty($_GET['LeChiffre'])){    
            echo "Ma valeur est :",$_GET['LeChiffre'];
        }else{
            echo "Formulaire non saisie";
            ?
            <form method="get" action="action.exo6.php">
            <form action="exo5.php" method="GET">
                <label>Mettre un chiffre</label>
                
                <input type="text" name="LeChiffre" />
                
                <input type="submit" name="Valider" value="Cliquer pour valider" />
            </form>
           php
        } 
          ? 
    </xmp>
