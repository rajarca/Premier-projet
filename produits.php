






<!DOCTYPE html>

<html lang="FR"> 
<head>
  <meta charset="utf-8"/>
</head>


<body style="background-color: #00FFFF;">

<h1 style="text-align: center; text-decoration: underline;">Bienvenu Dans Le Rayon Litterature</h1>	

 
<?php

$connexion = new PDO('mysql:host=localhost;dbname=test','root','',ARRAY (PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));



$reponse = $connexion ->query('SELECT * FROM produits');
while ($donnees=$reponse->fetch()) 
{
	echo ('<img style="width:90PX;height:90PX;border-radius:900PX;" src = "' . $donnees['src'] . '"/><br>' . $donnees['Auteur'] . '<br>' . ' Description : ' .    $donnees['Description'] .    ' <br> ' . '	PRIX : ' . $donnees['prix']  .  ' ' . '<mark>' .  ' Dollars' . '</mark>' . ' <br/>'  )  ;
}



 ?>


<h1 style="text-align: center; text-decoration: underline;">Qui somme-nous?</h1>

 <footer style="display: flex;   ">
<p style="font-family: impact; text-shadow: 5PX 5PX 5PX GREY; " >Mehdibook's stor is one of the book's providers in Morocco and North Africa,out customers trust us because we give them a verry good experience while buying from us  </p> 

<ul style="color: RED; font-family: arial;font-weight: bold; ">
  <li>Téléphone:0669419813</li>
  <li>Adresse:Hay Hassani Derb Houria Casablanca</li>
  <li>Email: contact@gmail.com</li>
</ul>

<ul style="color: RED; font-family: arial;font-weight: bold; ">
  <li>Facebook: Mehdi Biblat</li>
  <li>Instagram:#Mehdibook's stor</li>
  <li>Twitter:Mehdi Twitte</li>

</ul>








</body>	
</html> 
