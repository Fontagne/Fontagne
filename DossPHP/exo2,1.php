<html>
<head>
    <link href="style.css" rel="stylesheet">
    <title>Exercice 2 PHP</title>
    </head>
    <body>
    <table border="1">
        <tr>    
    <?php
        $MonTableauDeChiffre = array(12,132,13,65,474,5);
        //$i++ revient a $i = $i + 1
        for ($i=0; $i < 5; $i++) {
            ?> <td>
             <?php echo  $MonTableauDeChiffre[$i]; ?>
        </td>
        <?php
        } ?> 
        
        
    
    
    </tr>
    </table>
    <?php $MonTableauDeChiffre = array("Nombre 1" => 12, "Nombre " => 5);

foreach ($MonTableauDeChiffre as $indice => $valeur) {
    echo "clé " .$indice." valeur : " .$valeur. " ......";
}

?> 
    </body>
    </html>
    <xmp>
    <table border="1">
        <tr>    
    php
        $Tab = array('prenom' => 'Thomas', 'nom' => 'Fontagne','MDP' => 123);
        
        
        for ($i=0; $i < 1; $i++) {
            ? 
             
             
             
        
        <td>php echo $Tab ['prenom'];?</td>
        <td>php echo $Tab ['nom'];?</td>
        <td>php echo $Tab ['MDP'];?</td> 
        
        php
        } ?
        
        
        
    
    
    </tr>
    </table>   
        
    </xmp>
    <a href="http://192.168.65.195/Fontagne/">Retour</a>