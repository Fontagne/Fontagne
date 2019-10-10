<html>
    <head>
    <link href="style.css" rel="stylesheet">
    <title>Entrainement PHP</title>
    </head>
    <body>
        <h1>
        <?php echo "Serveur Toto"; ?>
        </h1>
        <h2>
          Test formulaire
        </h2>

       
        

        <?php 
        
        if (isset($_GET['LeChiffre']) && !empty($_GET['LeChiffre'])){    
            echo "Ma valeur est :",$_GET['LeChiffre'];
        }else{
            echo "Formulaire non saisie";
            ?>
            <form action="test.php" method="GET">
                <label>Votre chiffre</label>
                
                <input type="text" name="LeChiffre" />
                
                <input type="submit" name="Valider" value="Cliquer pour valider" />
            </form>
           <?php
        }
          ?> 
    </body>        
</html>
<a href="http://192.168.65.195/Fontagne/">Retour</a>

<xmp>
php 
        
        if (isset($_GET['LeChiffre']) && !empty($_GET['LeChiffre'])){    
            echo "Ma valeur est :",$_GET['LeChiffre'];
        }else{
            echo "Formulaire non saisie";
            ?
            <form action="test.php" method="GET">
                <label>Votre chiffre</label>
                
                <input type="text" name="LeChiffre" />
                
                <input type="submit" name="Valider" value="Cliquer pour valider" />
            </form>
           php
        }
          ?
    </xmp> 