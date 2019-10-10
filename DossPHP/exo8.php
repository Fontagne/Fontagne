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

                <input type="submit" name="Vider la session" value="Cliquer pour vider" />
                

            </form>
            <?php if (isset($_POST["LeChiffre"])){
                    $_SESSION["IndiceSession"]= $_POST["LeChiffre"];
                    echo "Vous avez saisie :" .$_POST["LeChiffre"];
                    ?>
            <?php } ?>
            
           
         
          
          <?php if (isset($_POST["Vider la session"]))
          {
              $_SESSION["IndiceSession"] = $_POST["Vider la session"];
              $_POST["Vider la session"] = "La session a été vidé";
              echo $_POST["Vider la session"];
          }
         ?>
          
          
         
        
          
          </body>
          </html>