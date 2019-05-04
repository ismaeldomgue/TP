<?php // phpinfo();
$sth = $dbh->prepare("SELECT nom, couleur FROM product");
$sth->execute();

?>

<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <?php 
   echo '<p>Bonjour le monde</p>';
   /* Récupération de toutes les lignes d'un jeu de résultats */
   print("Récupération de toutes les produits :\n");
   $result = $sth->fetchAll();
   print_r($result);
 ?>
 </body>
</html>
