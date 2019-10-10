<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>Exercice 3 PHP</title>
    </head>
    <body>
    <table border="1">
        <tr>
    <?php 
    $MonTableau[0]= array("Nom"=> "Fontagne","Prenom"=> "Thomas","Motdepasse"=> "TOTO");
    $MonTableau[1]= array("Nom"=> "Leroux","Prenom"=> "Léna","Motdepasse"=> "Queen");
    $MonTableau[2]= array("Nom"=> "Mehmoud","Prenom"=> "Ibra","Motdepasse"=> "POCEBLO");

    for ($i=0; $i < 3; $i++) {
    foreach ($MonTableau[$i] as $key=>$value) {
        ?> 
        <tr><td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td></tr>

        <?php
        }
     } ?>
</tr>
    </table>
    </body>
    </html>

    <xmp>
    <table border="1">
        <tr>
    php 
    $MonTableau[0]= array("nom"=> "Fontagne","prenom"=> "Thomas","MDP"=> "TOTO");
    $MonTableau[1]= array("nom"=> "Leroux","prenom"=> "Léna","MDP"=> "Queen");
    $MonTableau[2]= array("nom"=> "Mehmoud","prenom"=> "Ibra","MDP"=> "POCEBLO");

    for ($i=0; $i < 3; $i++) {
    foreach ($MonTableau[$i] as $key=>$value) {
        ?
        <tr><td>php echo $key; ?</td>
        <td>php echo $value; ?</td></tr>

        php
        }
     } ?
</tr>
    </table>
    </xmp>
    <a href="http://192.168.65.195/Fontagne/">Retour</a>

  

  
        

 