<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>Exercice 8 PHP</title>
    </head>
    <body>
     <?php session_start(); ?>   
     <?php 
    
        
    if (isset($_GET['LeChiffre']) && !empty($_GET['LeChiffre'])){    
        echo "Ma valeur est :",$_GET['LeChiffre'];
    }else{
        echo "Formulaire non saisie";
     } ?>
            
            <form action="exo8.php" method="POST">
                <label>Saisir quelque chose</label>
                
                <input type="text" name="LeChiffre" />
                
                <input type="submit" name="Valider" value="Cliquer pour valider" />

                <input type="submit" name="vider" value="reset" />
                

            </form>
            <?php if (isset($_POST["LeChiffre"])){
                    $_SESSION["IndiceSession"]= $_POST["LeChiffre"];
                    echo "Vous avez saisie :" .$_POST["LeChiffre"];
                    ?>
            <?php } ?>
            
           
         
          
          <?php if (isset($_POST["vider"]))
          {
              $_SESSION["IndiceSession"] = $_POST["vider"];
              $_POST["vider"] = "La session a été vidée";
              echo $_POST["vider"];
          }
         ?>

          
          
         
        
          
          </body>
          </html>
          <a href="http://192.168.65.195/Fontagne">Retour menu</a>

          <xmp>
          php session_start(); ?   
     php 
    
        
    if (isset($_GET['LeChiffre']) && !empty($_GET['LeChiffre'])){    
        echo "Ma valeur est :",$_GET['LeChiffre'];
    }else{
        echo "Formulaire non saisie";
     } ?
            
            <form action="exo8.php" method="POST">
                <label>Saisir quelque chose</label>
                
                <input type="text" name="LeChiffre" />
                
                <input type="submit" name="Valider" value="Cliquer pour valider" />

                <input type="submit" name="vider" value="reset" />
                

            </form>
            php if (isset($_POST["LeChiffre"])){
                    $_SESSION["IndiceSession"]= $_POST["LeChiffre"];
                    echo "Vous avez saisie :" .$_POST["LeChiffre"];
                    ?
            php } ?
            
           
         
          
          php if (isset($_POST["vider"]))
          {
              $_SESSION["IndiceSession"] = $_POST["vider"];
              $_POST["vider"] = "La session a été vidée";
              echo $_POST["vider"];
          }
         ?
        </xmp>


