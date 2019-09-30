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

        <form action="test.php" method="GET">
            <label>Votre chiffre</label>
            <!-- Zone de texte -->
            <input type="text" name="Lechiffre" />
            <!-- bouton de validation -->
            <input type="submit" name="Valider" value="Cliquer pour valider" />
        </form>

        <?php 
        // Test de la variable GET LeChiffre
        if (isset($_GET['LeChiffre'])){    
            echo "Ma valeur est :",$_GET['LeChiffre'];
        }else{
            echo "Formulaire non saisie";
            
        }
        ?>    
    </body>        
</html>
